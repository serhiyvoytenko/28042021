<?php


namespace web\controllers;

use helpers\ComponentsTrait;
use helpers\RequestHelper;
use models\RoomEntity;
use models\UserEntity;
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
        foreach ($messages as $key=>$message){
            $messages[$key]['userName'] = UserEntity::findOne($message['user_id'])->getName();
        }
//        var_dump($messages);
        echo json_encode($messages);
    }

    public function actionEdit(): void
    {
        var_dump($_GET);
    }
}