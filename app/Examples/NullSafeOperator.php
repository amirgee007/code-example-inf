<?php

namespace App\Examples;

class NullSafeOperator
{
    public function oldVersion()
    {
        $country = null;
        $session = session();

        if ($session !== null) {
            $user = $session->user;

            if ($user !== null) {
                $address = $user->getAddress();

                if ($address !== null) {
                    $country = $address->country;
                }
            }
        }

        return $country;
    }

    public function php8()
    {
        return session()?->user?->getAddress()?->country;
    }
}
