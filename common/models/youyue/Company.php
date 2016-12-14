<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-12-13
 * Time: 下午5:21
 */

namespace common\models\youyue;

use yii\data\Pagination;
use yii\db\ActiveRecord;

class Company extends ActiveRecord
{
    public static function tableName()
    {
        return 'sys_company';
    }

    public static function tableDesc()
    {
        return '公司介绍';
    }

    public static function getAll($pageSize)
    {
        $query = self::find()->where(['del_flag' => DEL_FLAG_FALSE]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => $pageSize]);
        $info['data'] = $query->offset($pages->offset)->limit($pages->limit)->all();
        $info['pages'] = $pages;
        return $info;
    }
}