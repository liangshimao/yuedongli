<?php

/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-12-7
 * Time: 下午6:32
 */
namespace common\models\youyue;
use yii\db\ActiveRecord;
class Banner extends ActiveRecord
{
    public static function tableName()
    {
        return 'sys_banner';
    }

    public static function tableDesc()
    {
        return '轮播图';
    }
    
    public static function getAll()
    {
        return self::find()->orderBy(['sort' => SORT_ASC])->all();
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