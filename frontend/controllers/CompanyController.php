<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-9-27
 * Time: 下午3:58
 */

namespace frontend\controllers;


use common\models\youyue\Info;
use common\models\youyue\Logo;

class CompanyController extends BaseController
{
    public function actionIndex()
    {
        $logo = Logo::getOne();
        $info = Info::getOne();
        return $this->renderPartial('index',[
            'logo' => isset($logo->img_url)?$logo->img_url:'',
            'info' => $info,
        ]);
    }
    
    public function actionIndexMobile()
    {
        $logo = Logo::getOne();
        $info = Info::getOne();
        return $this->renderPartial('mobile_index',[
            'logo' => isset($logo->img_url)?$logo->img_url:'',
            'info' => $info,
        ]);
    }

}