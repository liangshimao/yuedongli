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
        return self::find()->all();
    }
}