<?php

declare(strict_types=1);

namespace Shirokovnv\OtusDemoExample\SOLID\Principle3;

class BirdAirField
{
    public function testFlights(Bird $bird): void
    {
        // What happens if instead of $bird there is an object of the Penguin class?
        $bird->fly();
    }
}
