<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    public $table = 'members';
    public $fillable = ['name','email','message'];

}
