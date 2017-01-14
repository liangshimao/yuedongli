<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-12-7
 * Time: 下午6:06
 */

namespace backend\modules\youyue\controllers;

use backend\components\ShowMessage;
use backend\controllers\BaseController;
use common\components\Image;
use common\components\OutPut;
use common\models\youyue\Ico;
use yii\helpers\Url;

class IcoController extends BaseController
{
    public function actionIndex()
    {
        $info = Ico::getOne();
        $count = count($info);
        return $this->render('index',[
            'info' => $info,
            'logoCount' => $count,
        ]);
    }

    public function actionAdd()
    {
        if($this->request->isPost){
            $info = $this->request->post('ico');
            if(Ico::addRecord($info)){
                ShowMessage::info('添加成功','',Url::toRoute(['index']),'edit');
            }else{
                ShowMessage::info('添加失败');
            }
        }
        return $this->render('add');
    }
    public function actionEdit($id)
    {
        $model=Ico::findOne($id);
        if($this->request->isPost){
            $info = $this->request->post('ico');
            if(Ico::editRecord($id,$info)){
                ShowMessage::info('修改成功','',Url::toRoute(['index']),'edit');
            }else{
                ShowMessage::info('修改失败');
            }
        }
        return $this->render('edit',[
            'model' => $model,
        ]);

    }

    /**
     * ajax上传图片
     */
    public function actionUpload()
    {
        $imgPath = Image::upload($_FILES['thumb_file']);
        if(!empty($imgPath)){
            OutPut::returnJson('上传成功',200,['url' => $imgPath]);
        }else{
            OutPut::returnJson('上传失败',201);
        }
    }
}