<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-9-27
 * Time: 下午3:58
 */

namespace frontend\controllers;


use common\models\youyue\Duty;
use common\models\youyue\Logo;

class JobController extends BaseController
{
    public function actionIndex()
    {
        $logo = Logo::getOne();
        $job = Duty::getAll('',1000);
        if(self::isMobile()){
            return $this->renderPartial('mobile_index',[
                'logo' => isset($logo->img_url)?$logo->img_url:'',
                'job' => $job['data'],
            ]);
        }else{
            return $this->renderPartial('index',[
                'logo' => isset($logo->img_url)?$logo->img_url:'',
                'job' => $job['data'],
            ]);
        }
    }

    public function actionIndexMobile()
    {
        $logo = Logo::getOne();
        $job = Duty::getAll('',1000);
        return $this->renderPartial('mobile_index',[
            'logo' => isset($logo->img_url)?$logo->img_url:'',
            'job' => $job['data'],
        ]);
    }
}