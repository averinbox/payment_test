<?php
/**
 * Created by PhpStorm.
 * User: averinbox
 * Date: 17.10.17
 * Time: 19:23
 */

namespace app\modules\payments\controllers;

use app\models\Payment;
use app\modules\payments\forms\PayForm;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\web\Controller;

class PaymentController extends Controller
{
    /**
     * @return string|\yii\web\Response
     */
    public function actionIndex()
    {
        $formModel = new PayForm();
        if (\Yii::$app->request->isPost) {
            $post = \Yii::$app->request->post();
            $formModel->load($post);
            if ($formModel->validate() && $formModel->save()) {
                \Yii::$app->session->setFlash('success', 'Данные успешно сохранены');
                 return $this->redirect(['payment/item', 'id' => $formModel->id]);
            } else {
                \Yii::$app->session->setFlash('error', Html::errorSummary($formModel));
            }
        }

        return $this->render('index', ['formModel' => $formModel]);
    }

    /**
     * @return string
     */
    public function actionList()
    {
        $DataProvider = new ActiveDataProvider(['query' => Payment::find()]);
        return $this->render('list', ['DataProvider' => $DataProvider]);
    }

    /**
     * @param $id
     * @return string
     */
    public function actionItem($id)
    {
        return $this->render('invoice', ['model' => Payment::findOne($id)]);
    }
}