<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 17-1-14
 * Time: 下午3:56
 */

namespace common\models\youyue;
use yii\db\ActiveRecord;

class Ico extends ActiveRecord
{
    public static function tableName()
    {
        return 'sys_ico';
    }

    public static function tableDesc()
    {
        return 'ico';
    }

    public static function getOne()
    {
        return self::find()->one();
    }

    public static function addRecord($info)
    {
        $model = new self();
        $model->setAttributes($info,false);
        if($model->save()){
            return true;
        }else{
            return false;
        }
    }

    public static function editRecord($id,$info)
    {
        $model = self::findOne($id);
        if(empty($model)){
            return false;
        }
        $model->setAttributes($info,false);
        if($model->save()){
            return true;
        }else{
            return false;
        }
    }

    public static function delRecord($id)
    {
        $model = self::findOne($id);
        if(empty($model)){
            return false;
        }
        $model->setAttributes(['del_flag' => 1],false);
        if($model->save()){
            return true;
        }else{
            return false;
        }
    }
}
