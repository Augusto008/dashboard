<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard($lang) {
        return view('welcome', ["title" => "dashboard"]);
    }
}
