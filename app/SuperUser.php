<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuperUser extends Model
{
    protected $fillable = ['superuserid', 'superusername', 'superusernim', 'superusereventid'];
}
