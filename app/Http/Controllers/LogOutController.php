<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogOutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        Auth::logout();
        return to_route('login');
    }
}
