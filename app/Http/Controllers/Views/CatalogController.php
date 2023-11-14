<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalog($lang) {
        return "<h1>$lang/catalog</h1>";
    }
    public function category($lang) {
        return "<h1>$lang/catalog/category</h1>";
    }
    public function product($lang) {
        return "<h1>$lang/catalog/product</h1>";
    }
    public function model($lang) {
        return "<h1>$lang/catalog/model</h1>";
    }
}
