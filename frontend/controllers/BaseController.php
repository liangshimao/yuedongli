<?php

/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-9-14
 * Time: 下午4:18
 */
namespace frontend\controllers;
use yii\web\Controller;
class BaseController extends Controller
{
    public function init()
    {
        parent::init();
    }

    public static function isMobile()
    {
        $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
        $is_pc = (strpos($agent, 'windows nt')) ? true : false;
        $is_iphone = (strpos($agent, 'iphone')) ? true : false;
        $is_linux = (strpos($agent, 'linux')) ? true : false;
        $is_mac = (strpos($agent, 'mac os')) ? true : false;
        $is_android = (strpos($agent, 'android')) ? true : false;
        $is_ipad = (strpos($agent, 'ipad')) ? true : false;

        if($is_iphone){
            return  true;
        }

        if($is_android){
            return  true;
        }

        if($is_ipad){
            return  true;
        }

        if($is_pc){
            return  false;
        }
        if($is_linux){
            return  false;
        }

        if($is_mac){
            return  true;
        }
    }
}