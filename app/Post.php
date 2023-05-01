<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps
    public $timeStamps = true;
}

class Communion extends Model
{
    // Table Name
    protected $tableComm = 'communion';

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps
    public $timeStamps = true;
}

