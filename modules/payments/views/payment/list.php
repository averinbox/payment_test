<?php
/**
 * Created by PhpStorm.
 * User: averinbox
 * Date: 17.10.17
 * Time: 20:11
 */
$this->params['breadcrumbs'] = [
    ['label' => 'Форма платежей', 'url' => \yii\helpers\Url::to(['payment/index'])],
    'label' => 'Список платежей'
];

echo \yii\grid\GridView::widget([
    'dataProvider' => $DataProvider,
    'columns' => [
        'id',
        [
            'attribute' => 'seller',
            'format' => 'html',
            'value' => function($model) {
                return \yii\helpers\Html::a($model->seller, \yii\helpers\Url::to(['payment/item', 'id' => $model->id]));
            }
        ],
        'address',
        'inn',
        'checking_account',
        'correspondent_account',
        'bik',
        'bank_name',
        'price'
    ]
]);