<?php

namespace App;

class Leonard extends Citizen
{
    const NAME = 'Leonard';

    public function isBuddyWith(Citizen $citizen): bool
    {
        return $citizen instanceof Simpson;
    }
}
