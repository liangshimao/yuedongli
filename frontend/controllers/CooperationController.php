<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-9-27
 * Time: 下午3:58
 */

namespace frontend\controllers;
use common\components\OutPut;
use common\models\youyue\Info;
use common\models\youyue\Logo;
use common\models\youyue\Operation;
use Yii;

class CooperationController extends BaseController
{
    public function actionIndex()
    {
        $logo = Logo::getOne();
        $info = Info::getOne();
        if(self::isMobile()){
            return $this->renderPartial('mobile_index');
        }else{
            return $this->renderPartial('index',[
                'logo' => isset($logo->img_url)?$logo->img_url:'',
                'info' => $info,
            ]);
        }
    }

    public function actionIndexMobile()
    {
        return $this->renderPartial('mobile_index');
    }
    
    public function actionOperation_ajax()
    {
        if(!Yii::$app->request->isAjax){
            OutPut::returnJson('非法请求',201);
        }
        $params = Yii::$app->request->post();
        if(Operation::addRecord($params)){
            OutPut::returnJson('提交成功');
        }else{
            OutPut::returnJson('提交失败,请重试',201);
        }
        
    }
}