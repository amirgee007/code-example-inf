<?php

namespace App\Examples;

class AutoFix
{
    public function single()
    {
        /**
         * Example for single fix
         *
         * Press `Alt+Enter` on $user and `Enter`
         */
        $user = auth()->user();
        return $user;
    }

    public function bulk(array $data)
    {
        /**
         * Example for bulk fix
         *
         * Press `Alt+Enter` on the code
         * Press right arrow to see more options
         * Select `Fix all xxx problems in file` and `Enter`
         */
        return [
            'a' => isset($data['a']) ? $data['a'] : '',
            'b' => isset($data['b']) ? $data['b'] : '',
            'c' => isset($data['c']) ? $data['c'] : '',
            'd' => isset($data['d']) ? $data['d'] : '',
        ];
    }
}
