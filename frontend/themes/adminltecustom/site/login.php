<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Sign In';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>


  <body class="login-bg">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="login-box">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="model-intro">
                                    <h3>service model</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-container">
                                    <img id="profile-img" class="profile-img-card" src="<?= Yii::$app->request->baseUrl.'/images/user-icon.png' ?>">
                                    <p id="profile-name" class="profile-name-card"><?= Html::encode($this->title) ?></p>

                                    <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

                                    <?= $form
                                        ->field($model, 'username', $fieldOptions1)
                                        ->label(false)
                                        ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

                                    <?= $form
                                        ->field($model, 'password', $fieldOptions2)
                                        ->label(false)
                                        ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

                                    <div class="row">
                                        <div class="col-xs-8">
                                            <?= $form->field($model, 'rememberMe')->checkbox() ?>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-xs-4">
                                            <?= Html::submitButton('Sign in', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
                                        </div>
                                        <!-- /.col -->
                                    </div>


                                    <?php ActiveForm::end(); ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
