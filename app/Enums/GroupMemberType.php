<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Owner()
 * @method static static Admin()
 * @method static static Member()
 */
final class GroupMemberType extends Enum
{
    const Owner = 'owner';
    const Admin = 'admin';
    const Member = 'member';
}
