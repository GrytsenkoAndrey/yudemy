<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Category;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Job */
/* @var $form ActiveForm */
?>
<div class="maincontent">
<div class="job-create">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($job, 'category_id') ?>

        <?= $form->field($job, 'title') ?>
        <?= $form->field($job, 'description') ?>
        <?= $form->field($job, 'type') ?>
        <?= $form->field($job, 'requirements') ?>
        <?= $form->field($job, 'salary_range') ?>
        <?= $form->field($job, 'city') ?>
        <?= $form->field($job, 'address') ?>
        <?= $form->field($job, 'contact_email') ?>
        <?= $form->field($job, 'contact_phone') ?>
        <?= $form->field($job, 'is_published') ?>
        <?= $form->field($job, 'create_date') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- job-create -->
</div>