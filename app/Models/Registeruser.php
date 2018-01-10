<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registeruser extends Model
{
    //
    protected $table = 'register_users';
    protected $guarded = ['*','id'];
}
