<?php

/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-9-14
 * Time: 下午4:17
 */
namespace backend\controllers;


class IndexController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index',[
            'username' => 'admin',
        ]);
    }

    public function actionMain()
    {
        return $this->render('main');
    }
}