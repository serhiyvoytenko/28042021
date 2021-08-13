<?php


namespace web\controllers;

use models\RoomEntity;
use web\components\AbstractWebController;

class IndexController extends AbstractWebController
{
    public function actionIndex(): void
    {
        $this->render('index/index',[
    'rooms' => RoomEntity::findAll('created_at', SORT_DESC),
        ]);
    }
}