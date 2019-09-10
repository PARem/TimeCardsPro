<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = 'Сохранения';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="list-group">
    <?php $i = 1; ?>
    <?php foreach ($model as $item): ?>


    <a href="<?= Url::to(['/site/index', 'save' => $item['cards']]) ?>"
       class="list-group-item list-group-item-action"><?= $i .'. Название: '. $item['name'] . ' | Дата: ' . $item['date']?>
    </a>
        <?php $i++; ?>
    <?php endforeach; ?>
</div>
