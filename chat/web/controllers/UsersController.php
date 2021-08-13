<?php

namespace web\controllers;

use App;
use helpers\RequestHelper;
use models\UserEntity;
use web\components\AbstractWebController;

//use models\UserContactEntity;
//use models\UserEntity;

class UsersController extends AbstractWebController
{
    public function actionList(): void
    {
        // INSERT
//        $users = UserEntity::findAll();
//        $randomUserId = array_rand($users);
//        $randomUser = $users[$randomUserId];
//
//        $contact = new UserContactEntity();
//        $contact->contact = '+380' . random_int(100000000, 999999999);
//        $contact->type = UserContactEntity::TYPE_PHONE;
//        $contact->user_id = $randomUser->id;
//        $contact->save();
//
//        var_dump($users);exit;

//        // UPDATE
//        $user = UserEntity::findOne(4);
////        var_dump($user);
//        $user->name = 'Yuri Redder';
//        $user->birthday = '1974-03-08';
//        var_dump($user);
//        $user->save();
//        var_dump($user);
//        $user->name = 'Serhiy Serhiy';
//        $user->birthday = '1998-05-05';
//        var_dump($user);
//        $user->save();
//        var_dump($user);


//
//
//        $user = UserEntity::findOne(4576);
//        $user->delete();
//        var_dump($user);
//        exit;


//        // SELECT
//        var_dump(
////            UserEntity::findOne(11),
////            UserEntity::findOne(110),
////            UserContactEntity::findOne(3),
//            UserContactEntity::findAll()
//        );
        $t = App::get()->template()?->render('users/list');
        echo($t);
    }

    public function actionLogout(): void
    {
        App::get()->session()?->reset();
        $this->redirect(App::get()->config()->get('loginPage'));
    }

    public function actionProfile(): void
    {
        if (RequestHelper::isPost() && isset($_FILES['avatar'])) {
            $avatarsDir = __DIR__ . '/../public/images/avatars/';
            if (mime_content_type($_FILES['avatar']['tmp_name']) === 'image/jpeg') {

                $nameFile = App::get()->user()->getLogin();
                move_uploaded_file($_FILES['avatar']['tmp_name'],
                    $avatarsDir . $nameFile . '.jpeg');
            }
        }
        echo App::get()->template()?->render('users/profile');
    }

    public function actionGetAvatar(): void
    {
        $idUser = $_GET['id'];
        $allUser = UserEntity::findAll();
        foreach ($allUser as $user) {
            if ($user->id === $idUser) {
                $avatar = __DIR__.'/../public/images/avatars/'.$user->login . '.jpeg';
                header('Content-Type: image/jpeg');
                echo (file_exists($avatar))?
                file_get_contents(__DIR__.'/../public/images/avatars/'.$user->login . '.jpeg'):
                    file_get_contents(__DIR__.'/../public/images/avatars/default.png');
            }
        }
    }


}