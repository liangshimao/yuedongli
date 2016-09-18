<?php

/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-9-14
 * Time: 下午4:18
 */
namespace manager\controllers;
use yii\web\Controller;
use Yii;
class BaseController extends Controller
{
    public $userid;
    
    public function init()
    {
        parent::init();
        $this->userid = Yii::$app->session->get('userid');
        if(!$this->userid){
            return $this->redirect('/login');
        }
    }
}