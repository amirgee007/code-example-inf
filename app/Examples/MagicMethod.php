<?php

namespace App\Examples;

use App\Models\User;
use App\Models\UserWithPhpDoc;

class MagicMethod
{
    public function good()
    {
        /**
         * Go to the UserWithPhpDoc class file to see the phpdoc
         */
        return UserWithPhpDoc::where('id', 1)
            ->first(); // Can jump to source
    }

    public function bad()
    {
        return User::where('id', 1)
            ->first(); // Can't jump to source
    }
}
