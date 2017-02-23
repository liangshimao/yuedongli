<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-9-27
 * Time: 下午3:58
 */

namespace frontend\controllers;


use common\models\youyue\Logo;

class CompanyController extends BaseController
{
    public function actionIndex()
    {
        $logo = Logo::getOne();
        return $this->renderPartial('index',[
            'logo' => isset($logo->img_url)?$logo->img_url:'',
        ]);
    }
    
    public function actionIndexMobile()
    {
        $logo = Logo::getOne();
        return $this->renderPartial('mobile_index',[
            'logo' => isset($logo->img_url)?$logo->img_url:'',
        ]);
    }

}