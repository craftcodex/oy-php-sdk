<?php

namespace CraftCodex\OyPhpSdk\Services;

use CraftCodex\OyPhpSdk\Constants\Method;
use CraftCodex\OyPhpSdk\OyPhpSdk;

class Balance extends OyPhpSdk
{
    protected ?string $path = 'balance';

    protected string $method = Method::GET;
}
