<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-9-27
 * Time: 下午3:59
 */

namespace frontend\controllers;


use common\models\youyue\Info;
use common\models\youyue\Logo;

class DownloadController extends BaseController
{
    public function actionIndex()
    {
        $logo = Logo::getOne();
        $info = Info::getOne();
        if(self::isMobile()){
            return $this->renderPartial('mobile_index',[
                'info' => $info,
            ]);
        }else{
            return $this->renderPartial('index',[
                'logo' => isset($logo->img_url)?$logo->img_url:'',
            ]);
        }
    }

    public function actionIndexMobile()
    {
        $info = Info::getOne();
        return $this->renderPartial('mobile_index',[
            'info' => $info,
        ]);
    }
}