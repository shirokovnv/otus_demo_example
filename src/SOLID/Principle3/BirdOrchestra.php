<?php

declare(strict_types=1);

namespace Shirokovnv\OtusDemoExample\SOLID\Principle3;

class BirdOrchestra
{
    public function performConcert(Bird $birdOne, Bird $birdTwo, Bird $birdThree): void
    {
        $birdOne->sing();
        $birdTwo->sing();
        $birdThree->sing();
    }
}
