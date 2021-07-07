<?php

function actionList()
{
    render('contacts/list', ['name' => 'Dmytro Kotenko', 'template' => 'rrrr', 'last_name'=>'Voyten',]);
}

function actionSignout(){
    session_destroy();
    redirect(config('loginUrl'));
}

function actionNews()
{
    render('contacts/list', ['name'=>'Serhiy', 'last_name'=>'Voyten',], 'test');
}