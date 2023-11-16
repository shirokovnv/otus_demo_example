<?php

declare(strict_types=1);

namespace Shirokovnv\OtusDemoExample\SOLID\Principle3;

use Exception;

class Penguin extends Bird
{
    public function fly(): void
    {
        throw new Exception("Penguins cannot fly"); // Violates LSP
    }

    public function sing(): void
    {
        echo "Penguins can sing";
    }
}
