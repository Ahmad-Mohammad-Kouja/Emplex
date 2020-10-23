<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 */
final class NotificationTypes extends Enum
{
    const vacation = 'vacation';
    const request = 'request';
    const rate = 'rate';
    const role = 'role';
    const birthDay = 'birthDay';
    const schedule = 'schedule';
}
