<?php


namespace helpers;

use App;
use components\Config;
use components\DB;
use components\Router;
use components\Session;
use components\Template;
use web\components\User;


trait ComponentsTrait
{
    public function template(): Template
    {
        return App::get()->template();
    }

    public function config(): Config
    {
        return App::get()->config();
    }

    public function DB(): DB
    {
        return App::get()->db();
    }

    public function session(): Session
    {
        return App::get()->session();
    }

    public function router(): Router
    {
        return App::get()->router();
    }

    public function user(): User
    {
        return App::get()->user();
    }
}