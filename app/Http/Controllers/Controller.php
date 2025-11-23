<?php

namespace App\Http\Controllers;

use App\Http\Responses\Success;

abstract class Controller
{

    public function success(array $data, int $code = 200)
    {
        return new Success($data, $code);
    }
    //
}
