<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 17-2-21
 * Time: 下午4:09
 */

namespace common\models\youyue;


use yii\data\Pagination;
use yii\db\ActiveRecord;

class Duty extends ActiveRecord
{
    public static function tableName()
    {
        return 'sys_duty';
    }

    public static function tableDesc()
    {
        return '职位信息';
    }

    public static function getAll($name,$pageSize)
    {
        $query = self::find()->where(['del_flag' => DEL_FLAG_FALSE]);
        if(!empty($name)){
            $query->andFilterWhere(['like','name',$name]);
        }
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => $pageSize]);
        $info['data'] = $query->offset($pages->offset)->limit($pages->limit)->all();
        $info['pages'] = $pages;
        return $info;
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