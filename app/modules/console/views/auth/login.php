<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'ECTouch管理中心';
?>

<!-- begin #page-container -->
<div id="page-container" class="fade">
    <!-- begin login -->
    <div class="login bg-black animated fadeInDown">
        <!-- begin brand -->
        <div class="login-header">
            <div class="brand">
                <?= Html::encode($this->title) ?>
                <small>请输入管理员账号和登录密码</small>
            </div>
        </div>
        <!-- end brand -->
        <div class="login-content">
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => [
                    'class' => 'margin-bottom-0'
                ],
                'fieldConfig' => [
                    'template' => "{input}\n{error}"
                ]
            ]); ?>

            <?= $form->field($model, 'username', [
                'options' => [
                    'class' => 'm-b-20'
                ],
            ])->textInput([
                'autofocus' => true,
                'class' => 'form-control input-lg inverse-mode no-border',
                'placeholder' => '管理员用户名'
            ]) ?>

            <?= $form->field($model, 'password', [
                'options' => [
                    'class' => 'm-b-20'
                ],
            ])->passwordInput([
                'class' => 'form-control input-lg inverse-mode no-border',
                'placeholder' => '管理员账号'
            ]) ?>

            <?= $form->field($model, 'rememberMe', [
                'options' => [
                    'class' => 'm-b-20',
                ],
            ])->checkbox([
                'label' => '记住我'
            ]) ?>

            <div class="login-buttons">
                <?= Html::submitButton('登录管理系统', ['class' => 'btn btn-success btn-block btn-lg', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<!-- end login -->
