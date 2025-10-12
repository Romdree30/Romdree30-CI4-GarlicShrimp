<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function login(): string
    {
        return view('auth/login');
    }
}
