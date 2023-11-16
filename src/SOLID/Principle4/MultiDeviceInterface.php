<?php

declare(strict_types=1);

namespace Shirokovnv\OtusDemoExample\SOLID\Principle4;

interface MultiDeviceInterface
{
    public function print(): void;

    public function fax(): void;
}
