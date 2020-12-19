<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public static function createJoinCode()
    {
    	return substr(md5(mt_rand()), 0, 5);
    }
}
