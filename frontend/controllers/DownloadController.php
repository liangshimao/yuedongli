<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-9-27
 * Time: 下午3:59
 */

namespace frontend\controllers;


use common\models\youyue\Logo;

class DownloadController extends BaseController
{
    public function actionIndex()
    {
        $logo = Logo::getOne();
        if(self::isMobile()){
            return $this->renderPartial('mobile_index');
        }else{
            return $this->renderPartial('index',[
                'logo' => isset($logo->img_url)?$logo->img_url:'',
            ]);
        }
    }

    public function actionIndexMobile()
    {
        return $this->renderPartial('mobile_index');
    }
}