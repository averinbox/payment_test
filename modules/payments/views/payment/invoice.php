<?php
/**
 * Created by PhpStorm.
 * User: averinbox
 * Date: 17.10.17
 * Time: 20:43
 */
use yii\bootstrap\Alert;

$this->params['breadcrumbs'] = [
    ['label' => 'Форма платежей', 'url' => \yii\helpers\Url::to(['payment/index'])],
    ['label' => 'Список платежей', 'url' => \yii\helpers\Url::to(['payment/list'])],
    'label' => 'Платеж'
];
if (Yii::$app->session->hasFlash('success')) {
    echo Alert::widget([
        'options' => [
            'class' => 'alert-info',
        ],
        'body' => Yii::$app->session->getFlash('success'),
    ]);
}
?>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>№</th>
        <th>Наименование</th>
        <th>Ед. изм.</th>
        <th>Кол-во</th>
        <th>Цена</th>
        <th>Сумма</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?= $model->id; ?></td>
        <td>Оказание услуг по обслуживанию компьютерной техники</td>
        <td>Шт.</td>
        <td>1</td>
        <td><?= $model->price; ?></td>
        <td><?= $model->price; ?></td>
    </tr>
    <tr>
        <td colspan="3">Итого:</td>
        <td>1</td>
        <td></td>
        <td><?= $model->price; ?></td>
    </tr>
    </tbody>
</table>
