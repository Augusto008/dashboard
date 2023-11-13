<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main($lang) {
        return view('welcome', ["title" => "main"]);
    }

    public function addLang() {
        $browserLang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        $exploded = explode(',', $browserLang);
        $lang = substr($exploded[0], 0, 2);
        return redirect()->to("/$lang");
    }

}
