<?php

declare(strict_types=1);

namespace Shirokovnv\OtusDemoExample\SOLID\Principle3;

abstract class Bird
{
    abstract public function fly(): void;

    abstract public function sing(): void;
}
