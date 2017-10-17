<?php
/**
 * Created by PhpStorm.
 * User: averinbox
 * Date: 17.10.17
 * Time: 19:29
 */

namespace app\models;

use yii\db\ActiveRecord;

class Payment extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'payments';
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'seller' => 'Продавец',
            'address' => 'Адресc',
            'inn' => 'ИНН',
            'checking_account' => 'Расчётный счёт',
            'correspondent_account' => 'Кор. счёт',
            'bik' => 'БИК',
            'bank_name' => 'Банк',
            'price' => 'Цена',
        ];
    }
}