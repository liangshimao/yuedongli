<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-9-27
 * Time: 下午3:58
 */

namespace frontend\controllers;


class JobController extends BaseController
{
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
    public function actionFlow()
    {
        return $this->renderPartial('flow');
    }
    public function actionIssue()
    {
        return $this->renderPartial('issue');
    }
}