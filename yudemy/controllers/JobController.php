<?php

namespace app\controllers;

class JobController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $name = 'Job :: main';
        return $this->render('index', ['name' => $name,]);
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
