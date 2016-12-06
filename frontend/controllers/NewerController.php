<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-9-27
 * Time: 下午5:09
 */

namespace frontend\controllers;


class NewerController extends BaseController
{
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
}