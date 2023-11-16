<?php

declare(strict_types=1);

namespace Shirokovnv\OtusDemoExample\SOLID\Principle5;

class UserRepository
{
    public function __construct(Mysql $database)
    {
        $database->connect();
    }

    public function findByEmail(string $email): User
    {
        // find user logic

        return new User("name", "email");
    }
}
