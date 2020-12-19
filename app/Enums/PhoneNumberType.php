<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class PhoneNumberType extends Enum
{

    const Cell = 'cell';
    const Home = 'home';
    const Work = 'work';
}
