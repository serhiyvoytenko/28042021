<?php

namespace web\controllers;

use App;
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
}