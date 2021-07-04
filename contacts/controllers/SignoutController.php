<?php

function actionSkillup_exit(){
//    $_SESSION[];
    session_destroy();
    redirect(config('loginUrl'));
};