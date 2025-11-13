<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function dashboard(): string
    {
        return view('admin/dashboard');
    }

    public function shrimpMenu(): string
    {
        return view('admin/shrimpMenu');
    }

    public function accounts(): string
    {
        return view('admin/accounts');
    }

    public function requests(): string
    {
        return view('admin/requests');
    }
}
