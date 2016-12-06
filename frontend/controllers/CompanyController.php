<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-9-27
 * Time: 下午3:58
 */

namespace frontend\controllers;


class CompanyController extends BaseController
{
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }

}