<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representative extends Model
{
    protected $fillable = ['username', 'password', 'adminID', 'enterprise'];
}
