<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form ActiveForm */
$this->title = 'Register New User';
?>
<div class="maincontent">
<div class="user-register">
<h2 class="page-header">Register New User</h2>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($user, 'full_name') ?>
    <?= $form->field($user, 'user_name') ?>
    <?= $form->field($user, 'email') ?>
    <?= $form->field($user, 'password')->passwordInput() ?>
    <?= $form->field($user, 'password_repeat')->passwordInput() ?>


        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- user-register -->
</div>
