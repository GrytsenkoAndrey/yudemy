<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Category;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Job */
/* @var $form ActiveForm */

$this->title = 'Create Job';
?>
<div class="maincontent">
<div class="job-create">
    <h2 class="page-header">Add new job</h2>
    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($job, 'category_id')->dropDownList(
            Category::find()->select(['name', 'id'])->indexBy('id')->column(), ['prompt' => 'Select Category']
        ); ?>

        <?= $form->field($job, 'title') ?>
        <?= $form->field($job, 'description')->textarea(['rows' => '5']) ?>

        <?= $form->field($job, 'type')->dropDownList([
            'full_time' => 'Full Time',
            'part_time' => 'Part Time',
            'as_needed' => 'As Needed',
        ], ['prompt' => 'Select Type']); ?>

        <?= $form->field($job, 'requirements') ?>

        <?= $form->field($job, 'salary_range')->dropDownList([
            '_1000' => 'Under $1 000',
            '1000_2000' => '$1 000 - $2 000',
            '2000_4000' => '$2 000 - $4 000',
            '4000_6000' => '$4 000 - $6 000',
        ], ['prompt' => 'Select Salary']); ?>

        <?= $form->field($job, 'city') ?>
        <?= $form->field($job, 'address') ?>
        <?= $form->field($job, 'contact_email') ?>
        <?= $form->field($job, 'contact_phone') ?>
        <?= $form->field($job, 'is_published')->radioList(['1' => 'Yes', '0' => 'No']) ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- job-create -->
</div>