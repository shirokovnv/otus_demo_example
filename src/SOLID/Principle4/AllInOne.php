<?php

declare(strict_types=1);

namespace Shirokovnv\OtusDemoExample\SOLID\Principle4;

class AllInOne implements MultiDeviceInterface
{
    public function print(): void
    {
        // print logic
    }

    public function fax(): void
    {
        // fax logic
    }
}
