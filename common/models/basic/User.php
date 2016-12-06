<?php

/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-12-6
 * Time: 下午5:33
 */
namespace common\models\basic;
use yii\db\ActiveRecord;
use yii\data\Pagination;
class User extends ActiveRecord
{
    public static function tableName()
    {
        return 'basic_user';
    }

    public static function tableDesc(){
        return '用户表';
    }
    
    public static function getAll($name = '',$pageSize)
    {
        $query = self::find();
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => $pageSize]);
        $info['data'] = $query->offset($pages->offset)->limit($pages->limit)->all();
        $info['pages'] = $pages;
        return $info;
    }
}