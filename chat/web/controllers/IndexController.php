<?php


namespace web\controllers;

use App;
use components\AbstractController;

class IndexController extends AbstractController
{
    public function actionIndex(): void
    {
        $b = App::get()->template()?->render('index/index');
        echo $b;
    }
}