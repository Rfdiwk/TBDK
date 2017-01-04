<?php

use \yii\helpers\Url;
use yii\widgets\ActiveForm;
use \humhub\compat\CHtml;

$this->pageTitle = Yii::t('UserModule.views_auth_login', 'Login');
?>

<div class="container" style="text-align: center;">
    <?= humhub\widgets\SiteLogo::widget(['place' => 'login']); ?>
    <br>

    <div class="panel panel-default animated bounceIn" id="login-form"
         style="max-width: 300px; margin: 0 auto 20px; text-align: left;">

        <div class="panel-heading"><?php echo Yii::t('UserModule.views_auth_login', '<strong>Por favor</strong> faça o login'); ?></div>

        <div class="panel-body">

            <?php $form = ActiveForm::begin(['id' => 'account-login-form', 'enableClientValidation'=>false]); ?>

            <p><?php echo Yii::t('UserModule.views_auth_login', "Se você já é membro, por favor, faça o login com seu nome de usuário ou e-mail e senha."); ?></p>

            <?php echo $form->field($model, 'username')->textInput(['id' => 'login_username', 'placeholder' => $model->getAttributeLabel('username')])->label(false); ?>
            <?php echo $form->field($model, 'password')->passwordInput(['id' => 'login_password', 'placeholder' => $model->getAttributeLabel('password')])->label(false); ?>
            <?php echo $form->field($model, 'rememberMe')->checkbox(); ?>

            <hr>
            <div class="row">
                <div class="col-md-4">
                    <?php echo CHtml::submitButton(Yii::t('UserModule.views_auth_login', 'Entrar'), array('id' => 'login-button', 'class' => 'btn btn-large btn-primary')); ?>
                </div>
                <div class="col-md-8 text-right">
                    <small>
                        <?php echo Yii::t('UserModule.views_auth_login', 'Esqueceu sua senha?'); ?>
                        <a
                            href="<?php echo Url::toRoute('/user/auth/recover-password'); ?>"><br><?php echo Yii::t('UserModule.views_auth_login', 'Criar uma nova.') ?></a>
                    </small>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>

    </div>

    <br>

    <?php if ($canRegister) : ?>
        <div id="register-form"
             class="panel panel-default animated bounceInLeft"
             style="max-width: 300px; margin: 0 auto 20px; text-align: left;">

            <div class="panel-heading"><?php echo Yii::t('UserModule.views_auth_login', '<strong>Crie</strong> sua conta') ?></div>

            <div class="panel-body">

                <p><?php echo Yii::t('UserModule.views_auth_login', "Não tem uma conta? Junte-se à rede, digitando o seu endereço de e-mail."); ?></p>

                <?php $form = ActiveForm::begin(['id' => 'account-register-form']); ?>

                <?php echo $form->field($registerModel, 'email')->textInput(['id' => 'register-email', 'placeholder' => $registerModel->getAttributeLabel('email')])->label(false); ?>
                <hr>
                <?php echo CHtml::submitButton(Yii::t('UserModule.views_auth_login', 'Register'), array('class' => 'btn btn-primary')); ?>

                <?php ActiveForm::end(); ?>
            </div>
        </div>

    <?php endif; ?>

    <?= humhub\widgets\LanguageChooser::widget(); ?>
</div>

<script type="text/javascript">
    $(function () {
        // set cursor to login field
        $('#login_username').focus();
    })

    // Shake panel after wrong validation
<?php if ($model->hasErrors()) { ?>
        $('#login-form').removeClass('bounceIn');
        $('#login-form').addClass('shake');
        $('#register-form').removeClass('bounceInLeft');
        $('#app-title').removeClass('fadeIn');
<?php } ?>

    // Shake panel after wrong validation
<?php if ($registerModel->hasErrors()) { ?>
        $('#register-form').removeClass('bounceInLeft');
        $('#register-form').addClass('shake');
        $('#login-form').removeClass('bounceIn');
        $('#app-title').removeClass('fadeIn');
<?php } ?>

</script>


