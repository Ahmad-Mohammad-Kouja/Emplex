<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 */
final class RequestStateTypes extends Enum
{
    const pending =   'pending';
    const rejected =   'rejected';
    const approved = 'approved';
}
