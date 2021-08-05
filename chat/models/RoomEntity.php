<?php

namespace models;

use components\db\ActiveRecord;


/**
 *Class RoomEntity
 * @package models
 *
 * @property int $id
 * @property string $title
 * @property string $created_at
 */
class RoomEntity extends ActiveRecord
{

    protected function tableName(): string
    {
        return 'rooms';
    }
}