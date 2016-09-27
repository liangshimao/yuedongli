<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-9-14
 * Time: 下午5:23
 */

namespace manager\controllers;


use yii\web\Controller;
use Yii;
use yii\helpers\Url;
class LoginController extends Controller
{
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
    
    public function actionLogin()
    {
        if(Yii::$app->request->isPost){
            $username = Yii::$app->request->post('username');
            $password = Yii::$app->request->post('password');
            Yii::$app->session->set('userId',$username);
            return $this->redirect('/');
        }

    }
    public function actionLayout()
    {
        Yii::$app->session->removeAll();
        return $this->redirect(Url::toRoute('login'));
    }
}