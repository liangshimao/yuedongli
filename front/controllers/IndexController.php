<?php

/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-9-14
 * Time: 下午4:17
 */
namespace front\controllers;


class IndexController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}