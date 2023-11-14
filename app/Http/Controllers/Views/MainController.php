<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main($lang) {
        return "<h1>$lang/main</h1>";
    }
}
