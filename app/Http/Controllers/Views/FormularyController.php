<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormularyController extends Controller
{
    public function formulary($lang) {
        return view('welcome', ["title" => "formulary"]);
    }
}
