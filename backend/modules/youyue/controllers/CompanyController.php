<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-12-7
 * Time: 下午6:07
 */

namespace backend\modules\youyue\controllers;

use backend\controllers\BaseController;
use common\models\youyue\Company;

class CompanyController extends BaseController
{
    public function actionIndex()
    {
        $info = Company::getAll(PAGESIZE);
        return $this->render('index',[
            'info' => $info['data'],
            'pages' => $info['pages'],
        ]);
    }

    public function actionAdd()
    {
        return $this->render('add');
    }

    public function actionEdit($id)
    {

        return $this->render('edit');
    }
}