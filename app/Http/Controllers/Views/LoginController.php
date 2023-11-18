<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login($lang) {
        return view("login", [
            "lang" => $lang,
            "title" => "Login"
        ]);
    }
}
