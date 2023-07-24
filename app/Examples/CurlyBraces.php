<?php

namespace App\Examples;

class CurlyBraces
{
    /**
     * Recommended
     */
    public function good(): string
    {
        if (rand(0, 1)) {
            return 'yes';
        } else {
            return 'no';
        }
    }

    /**
     * Not recommended
     *
     * If we want to add a new line into the statement block, we also need to add curly braces finally.
     */
    public function bad(): string
    {
        if (rand(0, 1))
            return 'yes';
        else
            return 'no';
    }
}
