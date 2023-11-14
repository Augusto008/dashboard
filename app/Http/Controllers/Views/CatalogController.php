<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalog($lang) {
        return "<h1>Catalog</h1>";
    }
    public function category($lang) {
        return "<h1>Category</h1>";
    }
}
