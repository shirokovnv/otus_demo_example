<?php

declare(strict_types=1);

namespace Shirokovnv\OtusDemoExample\SOLID\Principle5;

class User
{
    public function __construct(
        public string $name,
        public string $email
    ){}
}
