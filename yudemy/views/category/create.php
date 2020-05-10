<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Category */
/* @var $form ActiveForm */
$this->title = 'Create category';
?>
<div class="maincontent">
<div class="category-create">
    <h2 class="page-header">Add new category</h2>

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($category, 'name') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- category-create -->
</div>