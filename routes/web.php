<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Views\CatalogController as Catalog;
use App\Http\Controllers\Views\MainController as Main;


Route::get('/', [Main::class, 'addLang']);
Route::get('/{lang}', [Main::class, 'main']);
Route::get('/{lang}/catalog', [Catalog::class, 'catalog']);
