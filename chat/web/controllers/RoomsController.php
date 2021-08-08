<?php


namespace web\controllers;

use helpers\ComponentsTrait;
use helpers\RequestHelper;
use models\RoomEntity;
use web\components\AbstractWebController;

class RoomsController extends AbstractWebController
{
    use ComponentsTrait;

    public function actionCreate(): void
    {
        if(RequestHelper::isPost() && isset($_POST['title'])){
            $room = new RoomEntity();
            $room->title = $_POST['title'];
            $room->save();

            $this->redirect($this->config()->get('mainPage'));
        }
        $this->render('rooms/create');
    }

    public function actionGetMessages(): void
    {
        $roomId = $_GET['room_id'] ?? 0;
        $messages = RoomEntity::getMessagesByRoom($roomId);
        echo json_encode($messages);
    }
}