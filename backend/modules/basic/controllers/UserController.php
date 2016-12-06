<?php

/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-12-6
 * Time: 下午5:22
 */
namespace backend\modules\basic\controllers;
use backend\controllers\BaseController;
use common\models\basic\User;
class UserController extends BaseController
{
    public function actionIndex()
    {
        $name = $this->request->get('name');
        $pageSize = $this->request->get('per-page', PAGESIZE);

        $info = User::getAll($name,$pageSize);
        return $this->render('index', [
            'info' => $info['data'],
            'name' => $name,
            'pages' => $info['pages']
        ]);
    }
    
    public function actionAdd()
    {
        
    }
    
    public function actionEdit()
    {
        
    }
    
    public function actionDelete()
    {
        
    }
}