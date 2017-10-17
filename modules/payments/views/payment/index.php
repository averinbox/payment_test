<?php
/**
 * Created by PhpStorm.
 * User: averinbox
 * Date: 17.10.17
 * Time: 19:23
 */

use \yii\bootstrap\ActiveForm;


$this->params['breadcrumbs'] = [
    ['label' => 'Форма платежей']
];

$formm = ActiveForm::begin(['layout' => 'horizontal']);
echo $formm->field($formModel, 'seller');
echo $formm->field($formModel, 'address');
echo $formm->field($formModel, 'inn');
echo $formm->field($formModel, 'checking_account');
echo $formm->field($formModel, 'correspondent_account');
echo $formm->field($formModel, 'bik');
echo $formm->field($formModel, 'bank_name');
echo $formm->field($formModel, 'price');
echo \yii\helpers\Html::submitButton('Отправить данные', ['class' => 'btn btn-primary col-xs-offset-3']);
echo \yii\helpers\Html::a('Посмотреть список', \yii\helpers\Url::to(['payment/list']), ['class' => 'btn']);
ActiveForm::end();