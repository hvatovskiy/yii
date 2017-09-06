<?php
/* @var $this yii\web\View */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title='lols';
$f=ActiveForm::begin();
echo $f->field($form,'name');
echo Html::submitButton('lolkek');
ActiveForm::end();

