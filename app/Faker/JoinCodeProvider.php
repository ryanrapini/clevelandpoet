<?php

namespace App\Faker;

use Faker\Provider\Base;
use App\Models\Group;

class JoinCodeProvider extends Base
{
    public function customName()
    {
        return Group::createJoinCode();
    }
}