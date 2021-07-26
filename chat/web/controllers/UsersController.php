<?php

namespace web\controllers;

use App;
use components\AbstractController;
use models\UserContactEntity;
use models\UserEntity;

class UsersController extends AbstractController
{
    public function actionList()
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

        // UPDATE
        $user = UserEntity::findOne(4);
        $user->name = 'Yuri Redner';
        $user->birthday = '1974-03-08';
//        $user->save();
            var_dump($user);
//
//
//        $user = UserEntity::findOne(4576);
//        $user->delete();
//        var_dump($user);
//        exit;


        // SELECT
//        var_dump(
//            UserEntity::findOne(11),
//            UserEntity::findOne(110),
//            UserContactEntity::findOne(3),
////            UserContactEntity::findAll()
//        );exit;
        $t = App::get()->template()?->render('users/list');
        echo($t);
    }
}