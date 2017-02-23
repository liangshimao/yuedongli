<?php

/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-9-14
 * Time: 下午4:17
 */
namespace frontend\controllers;


use common\models\youyue\Banner;
use common\models\youyue\Logo;

class IndexController extends BaseController
{
    public function actionIndex()
    {
        $list = Banner::getAll();
        $logo = Logo::getOne();
        if(self::isMobile()){
            return $this->renderPartial('mobile_index',[
                'logo' => isset($logo->img_url)?$logo->img_url:'',
            ]);
        }else{
            return $this->renderPartial('index',[
                'list' => $list,
                'logo' => isset($logo->img_url)?$logo->img_url:'',
            ]);
        }
    }

    public function actionIndexMobile()
    {
        $logo = Logo::getOne();
        return $this->renderPartial('mobile_index',[
            'logo' => isset($logo->img_url)?$logo->img_url:'',
        ]);
    }
    
    
}