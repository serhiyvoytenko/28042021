<?php

namespace models;

use components\db\ActiveRecord;

class MessageEntity extends ActiveRecord
{

    protected function tableName(): string
    {
        return 'messages';
    }
}