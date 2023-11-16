<?php

declare(strict_types=1);

namespace Shirokovnv\OtusDemoExample\SOLID\Principle2;

class Communication
{
    public function communicate(AnimalInterface $animal): string
    {
        switch (true) {
            case $animal instanceof Dog:
                return $animal->bark();
            case $animal instanceof Duck:
                return $animal->quack();
            case $animal instanceof Fox:
                return $animal->whatDoesTheFoxSay();
            default:
                throw new \InvalidArgumentException('Unknown animal');
        }
    }
}
