<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-9-27
 * Time: 下午3:59
 */

namespace frontend\controllers;


class DownloadController extends BaseController
{
    public function actionIndex()
    {
        if(self::isMobile()){
            return $this->renderPartial('mobile_index');
        }else{
            return $this->renderPartial('index');
        }
    }

    public function actionIndexMobile()
    {
        return $this->renderPartial('mobile_index');
    }
}