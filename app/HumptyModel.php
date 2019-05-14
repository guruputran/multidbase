<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class HumptyModel extends Eloquent
{
    // protected $connection = 'mysql'; (Method 1)
     public $table = 'humpty_members';
    public $fillable = ['name','email','message'];
}
