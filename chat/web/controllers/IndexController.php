<?php


namespace web\controllers;

use web\components\AbstractWebController;

class IndexController extends AbstractWebController
{
    public function actionIndex(): void
    {
        $this->render('index/index');
    }
}