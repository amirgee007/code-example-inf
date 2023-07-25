<?php

namespace App\Examples;

use App\Models\User;
use App\Models\UserWithMethodPhpDoc;
use App\Models\UserWithMixinPhpDoc;

class MagicMethod
{
    public function index()
    {
        /**
         * No PhpDoc.
         * Can't jump to source.
         */
        User::where('id', 1)->first();

        /**
         * Use @method.
         * Can jump to source, but we need to add doc for all magic method manually.
         */
        UserWithMethodPhpDoc::where('id', 1)->first();

        /**
         * Use @mixin.
         * It allows this class to reference all methods of another class.
         * Can jump to source, but there will be a warning.
         */
        UserWithMixinPhpDoc::where('id', 1)->first();

        /**
         * In most cases, phpdoc is very useful,
         * but for Laravel Models, the following is the easiest way to do it
         */
        User::query()->where('id', 1)->first();
    }
}
