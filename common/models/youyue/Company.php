<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 17-1-14
 * Time: 下午4:49
 */

namespace common\models\youyue;
use yii\db\ActiveRecord;

class Company extends ActiveRecord
{
    public static function tableName()
    {
        return 'sys_company_introduce';
    }

    public static function tableDesc()
    {
        return '公司基本信息';
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
}