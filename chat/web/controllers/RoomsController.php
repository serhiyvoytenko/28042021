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
        if (RequestHelper::isPost() && !empty($_FILES['logoRoom']['size'])) {
            $logoRoomDir = __DIR__ . '/../public/images/logo_rooms/';
            if (mime_content_type($_FILES['logoRoom']['tmp_name']) === 'image/jpeg') {
                $nameFile = $_GET['roomId'];
                move_uploaded_file($_FILES['logoRoom']['tmp_name'],
                    $logoRoomDir . $nameFile . '.jpeg');
            }
            $this->redirect($this->config()->get('mainPage'));
        }

        if (RequestHelper::isPost() && isset($_POST['newTitle'])){
            $roomNewTitle = RoomEntity::findOne($_GET['roomId']);
            $roomNewTitle->title = $_POST['newTitle'];
            $roomNewTitle->save();
            $this->redirect($this->config()->get('mainPage'));
        }

        $roomTitle = RoomEntity::findOne($_GET['roomId']);
        $this->render('rooms/edit',['roomTitle'=>$roomTitle->title,]);
    }

    public function actionDelete(): void
    {
        if(isset($_GET['roomId'])){
            $room = new RoomEntity();
            $room->id = $_GET['roomId'];
            $room->delete();
            $this->redirect($this->config()->get('mainPage'));
        }
    }
}