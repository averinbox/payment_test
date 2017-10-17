<?php
/**
 * Created by PhpStorm.
 * User: averinbox
 * Date: 17.10.17
 * Time: 19:30
 */

namespace app\modules\payments\forms;

use app\models\Payment;
use yii\base\Model;

class PayForm extends Model
{
    public $id = null;

    public $seller;
    public $address;
    public $inn;
    public $checking_account;
    public $correspondent_account;
    public $bik;
    public $bank_name;
    public $price;

    /**
     * Правила валидации
     * @return array
     */
    public function rules()
    {
        return [
            [['seller', 'address', 'inn', 'checking_account', 'correspondent_account', 'bik', 'bank_name', 'price'], 'required'],
            [['seller', 'address', 'bank_name'], 'string', 'length' => [1, 255]],
            [['inn', 'checking_account', 'correspondent_account', 'bik'], 'integer'],
            ['price', 'double']
        ];
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return Payment::attributeLabels();
    }

    /**
     * Сохранение данных
     * @return bool
     */
    public function save()
    {
        $model = new Payment();
        $model->seller = $this->seller;
        $model->address = $this->address;
        $model->inn = $this->inn;
        $model->checking_account = $this->checking_account;
        $model->correspondent_account = $this->correspondent_account;
        $model->bik = $this->bik;
        $model->bank_name = $this->bik;
        $model->price = $this->price;
        if($model->save()) {
            $this->id = $model->id;
            return $this->id;
        }
        return false;
    }

}