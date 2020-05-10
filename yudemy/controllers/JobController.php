<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use app\models\Category;
use app\models\Job;

class JobController extends \yii\web\Controller
{
    /**
     * Access control
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create', 'edit', 'delete', 'details'],
                'rules' => [
                    [
                        'actions' => ['create', 'edit', 'delete', 'details'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex($category = 0)
    {
        $query = Job::find();
        $pagination = new Pagination([
            'defaultPageSize' => 12,
            'totalCount' => $query->count(),
        ]);
        if (!empty($category)) {
            $jobs = $query->orderBy('create_date DESC')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->where(['category_id' => $category])
                ->all();
        } else {
            $jobs = $query->orderBy('create_date DESC')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();
        }

        return $this->render('index', ['jobs' => $jobs, 'pagination' => $pagination]);
    }

    public function actionCreate()
    {
        $job = new Job();

        if ($job->load(Yii::$app->request->post())) {
            if ($job->validate()) {
                // save to DB
                $job->save();
                // show message
                yii::$app->getSession()->setFlash('message', 'Job added successfully');
                return $this->redirect('index.php?r=job');
            }
        }

        return $this->render('create', ['job' => $job,]);
    }

    public function actionDelete($id)
    {
        # Delete Job
        $job = Job::findOne($id);
        # check owner
        if (yii::$app->user->identity->id != $job->user_id) {
            return $this->redirect('index.php?r=job');
        }

        $job->delete($id);
        // show message
        yii::$app->getSession()->setFlash('message', 'Job deleted successfully');
        return $this->redirect('index.php?r=job');
    }

    public function actionEdit($id)
    {
        $job = Job::findOne($id);

        # check owner
        if (yii::$app->user->identity->id != $job->user_id) {
            return $this->redirect('index.php?r=job');
        }
        if ($job->load(Yii::$app->request->post())) {
            if ($job->validate()) {
                // save to DB
                $job->save();
                // show message
                yii::$app->getSession()->setFlash('message', 'Job edited successfully');
                return $this->redirect('index.php?r=job');
            }
        }

        return $this->render('edit', ['job' => $job,]);
    }

    public function actionDetails($id)
    {
        $job = Job::find()->where(['id' => $id])->one();
        return $this->render('details', ['job' => $job]);
    }
}
