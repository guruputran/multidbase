<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class DumptyModel extends Eloquent
{
    protected $connection = 'mysql2';
    public $table = 'dumpty_members';
    public $fillable = ['name','email','message'];
}
