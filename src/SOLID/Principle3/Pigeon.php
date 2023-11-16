<?php

declare(strict_types=1);

namespace Shirokovnv\OtusDemoExample\SOLID\Principle3;

class Pigeon extends Bird
{
    public function fly(): void
    {
        echo "Pigeons can fly";
    }

    public function sing(): void
    {
        echo "Pigeons can sing";
    }
}
