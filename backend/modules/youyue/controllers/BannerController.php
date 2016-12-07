<?php

/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-12-7
 * Time: 下午6:03
 */
namespace backend\modules\youyue\controllers;
use backend\controllers\BaseController;
use common\models\youyue\Banner;

class BannerController extends BaseController
{
    public function actionIndex()
    {
        $info = Banner::getAll();
        return $this->render('index',[
            'info' => $info,
        ]);
    }
    
    public function actionEdit($id)
    {
        $model=Banner::findOne($id);
        if($this->request->isPost){
            
        }
        return $this->render('edit',[
            'model' => $model,
        ]);
        
    }
}