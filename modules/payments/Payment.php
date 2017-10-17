<?php
/**
 * Created by PhpStorm.
 * User: averinbox
 * Date: 17.10.17
 * Time: 19:19
 */

namespace app\modules\payments;


use yii\base\Module;

class Payment extends Module
{
    public function init()
    {
        parent::init();
        \Yii::configure($this, require(__DIR__ . '/config.php'));
    }
}