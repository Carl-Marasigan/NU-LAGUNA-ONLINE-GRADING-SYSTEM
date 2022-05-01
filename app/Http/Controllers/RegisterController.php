<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected $redirectTo = '/home';

    protected function redirectTo()
    {
        if (auth()->user()->role_id == 1) {
            return '/admin';
        }
        return '/home';
    }

}