<?php

declare(strict_types=1);

namespace Shirokovnv\OtusDemoExample\SOLID\Principle3;

class Canary extends Bird
{
    public function fly(): void
    {
        echo "Canaries can fly";
    }

    public function sing(): void
    {
        echo "Canaries can sing";
    }
}
