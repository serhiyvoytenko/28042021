<?php


namespace web\controllers;

use helpers\RequestHelper;
use models\RoomEntity;
use web\components\AbstractWebController;

class RoomsController extends AbstractWebController
{
    public function actionCreate(): void
    {
        if(RequestHelper::isPost() && isset($_POST['title'])){
            $room = new RoomEntity();
            $room->title = $_POST['title'];
            unset($room->created_at);
            var_dump($room);
            $room->save();
        }
        $this->render('rooms/create');
    }
}