<?php

namespace App\Helper;

if (! function_exists('getRealClientIp')) {
    function getRealClientIp(): string
    {
        return request()->ip();
    }
}
