<?php

namespace App;

class Simpson extends Citizen
{
    const NAME = 'Simpson';

    public function isBuddyWith(Citizen $citizen): bool
    {
        return ! $citizen instanceof Grimes;
    }
}
