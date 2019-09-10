<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin()?>
    <?= $form->field($model, 'username')->textInput(['autofocus' => true])?>
    <?= $form->field($model, 'email')->input('email') ?>
    <?= $form->field($model, 'password')->passwordInput()?>
    <?= Html::submitButton('Регистрация')?>
<?php ActiveForm::end()?>
