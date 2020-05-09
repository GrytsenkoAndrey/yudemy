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
    public function actionIndex($category = 0)
    {
        $query = Job::find();
        $pagination = new Pagination([
            'defaultPageSize' => 20,
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
        return $this->render('create');
    }

    public function actionDelete()
    {
        return $this->render('delete');
    }

    public function actionEdit()
    {
        return $this->render('edit');
    }
}
