<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery($lang) {
        return view('welcome', ["title" => "gallery"]);
    }
}
