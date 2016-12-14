<?php

/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-9-14
 * Time: 下午4:17
 */
namespace frontend\controllers;


class IndexController extends BaseController
{
    public function actionIndex()
    {
        if(self::isMobile()){
            return $this->renderPartial('mobile_index');
        }else{
            return $this->renderPartial('index');
        }
        
    }
    
    
}