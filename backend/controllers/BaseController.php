<?php

/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-9-14
 * Time: 下午4:18
 */
namespace backend\controllers;
use yii\web\Controller;
use Yii;
class BaseController extends Controller
{
    //总的redis对象
    public $cache;
    public $request;
    public $session;
    public $userid;
    public $username;
    public $realname;
    public $datetime;


    public function init()
    {
        parent::init();
        $this->cache = Yii::$app->cache;

        $this->request = Yii::$app->request;

        $this->session = Yii::$app->session;

        $this->userid = $this->session->get('userid');
//        if(empty($this->userid)){
//            ShowMessage::info('您还没有登陆！',Url::toRoute('/login/login'),1000);
//        }
        $this->username = $this->session->get('username');
        $this->datetime = date('Y-m-d H:i:s');
    }
}