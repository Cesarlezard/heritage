<?php

namespace App;

class Grimes extends Citizen
{
    const NAME = 'Grimes';

    public function isBuddyWith(Citizen $citizen): bool
    {
        return false;
    }
}
