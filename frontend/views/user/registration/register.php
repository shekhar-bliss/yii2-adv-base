<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var dektrium\user\models\User $model
 * @var dektrium\user\Module $module
 */

$this->title = Yii::t('user', 'Sign up');
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('/_alert', ['module' => $module]); ?>
<body class="login-bg">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="login-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-container">
                                    <img id="profile-img" class="profile-img-card" src="">
                                    <p id="profile-name" class="profile-name-card"><?= Html::encode($this->title) ?></p>
                                    <?php $form = ActiveForm::begin([
                                    'id' => 'login-form',
                                    'enableAjaxValidation' => true,
                                    'enableClientValidation' => false,
                                    'validateOnBlur' => false,
                                    'validateOnType' => false,
                                    'validateOnChange' => false,
                                    'options' => [
                                    'class' => 'form-signin'
                                    ]
                                    ]) ?>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                    <?= $form->field($model, 'username',['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control','placeholder'=>$model->getAttributeLabel('username'),'required' => 'required']])->label(false) ?>
                                    </div>
                                    <div class="col-xs-6">
                                    <?= $form->field($model, 'email',['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control','placeholder'=>$model->getAttributeLabel('email'),'required' => '']])->label(false) ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                    <?= $form->field($model, 'password',['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control','placeholder'=>$model->getAttributeLabel('password'),'required' => 'required']])->passwordInput()->label(false) ?>
                                    </div>
                                    <div class="col-xs-6">
                                    <?= $form->field($model, 'password',['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control','placeholder'=>'Confirm','required' => 'required']])->passwordInput()->label(false) ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-4">
                                    <?= Html::submitButton(Yii::t('user', 'Register'), ['class' => 'btn btn-success btn-block btn-signin']) ?>
                                    </div>
                                    <div class="col-md-2">
                                    <?php echo Html::a(
                                    Yii::t('user', 'User Login'),
                                    ['/user/security/login'],
                                    ['class' => 'btn btn-lg btn-block new-user']
                                    ); ?>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                <?php ActiveForm::end(); ?><!-- /form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
