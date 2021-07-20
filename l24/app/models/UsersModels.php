<?php

namespace app\models;

use traits\BingTrait;

class UsersModels
{
    use BingTrait;

    public function testTrait(): void
    {
        $this->sendData(['test','data']);
    }

}