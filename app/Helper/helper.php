<?php

namespace App\Helper;

use Illuminate\Support\Facades\Crypt;

class helper
{
    public static function encryptData($data)
    {
        return Crypt::encrypt($data);
    }

    public static function decryptData($data)
    {
        return Crypt::decrypt($data);
    }
}
