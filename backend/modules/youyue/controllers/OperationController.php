<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-12-7
 * Time: 下午6:08
 */

namespace backend\modules\youyue\controllers;

use backend\controllers\BaseController;
use common\models\youyue\Operation;

class OperationController extends BaseController
{
    public function actionIndex()
    {
        $name = $this->request->get('name');
        $pageSize = $this->request->get('per-page', PAGESIZE);
        $info = Operation::getAll($name,$pageSize);
        return $this->render('index',[
            'info' => $info['data'],
            'name' => $name,
            'pages' => $info['pages']
        ]);
    }
}