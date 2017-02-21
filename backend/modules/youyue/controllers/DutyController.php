<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-12-7
 * Time: 下午6:08
 */

namespace backend\modules\youyue\controllers;

use backend\components\ShowMessage;
use backend\controllers\BaseController;
use common\models\youyue\Duty;
use yii\helpers\Url;

class DutyController extends BaseController
{
    public function actionIndex()
    {
        
        $name = $this->request->get('name');
        $pageSize = $this->request->get('per-page', PAGESIZE);
        $info = Duty::getAll($name,$pageSize);
        return $this->render('index',[
            'info' => $info['data'],
            'name' => $name,
            'pages' => $info['pages']
        ]);
    }

    public function actionAdd()
    {
        if($this->request->isPost){
            $params = $this->request->post();
            if(Duty::addRecord($params)){
                return $this->redirect(['index']);
            }
        }
        return $this->render('add');
    }
    
    public function actionEdit($id){
        if($this->request->isPost){
            $params = $this->request->post();
            if(Duty::editRecord($id,$params)){
                return $this->redirect(['index']);
            }
        }
        $model = Duty::findOne($id);
        return $this->render('edit',[
            'model' => $model,
        ]);
    }
    
    public function actionDelete($id)
    {
        $model = Duty::findOne($id);
        $model->setAttributes([
            'del_flag' => DEL_FLAG_TRUE,
        ],false);
        $model->save();
        ShowMessage::info('删除成功','',Url::toRoute(['index']),'edit');
    }
}