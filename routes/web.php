<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Views\CatalogController as Catalog;
use App\Http\Controllers\Views\DashboardController as Dashboard;
use App\Http\Controllers\Views\FormularyController as Formulary;
use App\Http\Controllers\Views\GalleryController as Gallery;
use App\Http\Controllers\Views\LoginController as Login;
use App\Http\Controllers\Views\MainController as Main;


Route::get('/', [Main::class, 'addLang']);
Route::get('/{lang}', [Main::class, 'main']);
Route::get('/{lang}/catalog', [Catalog::class, 'catalog']);
Route::get('/{lang}/catalog/category', [Catalog::class, 'category']);
Route::get('/{lang}/catalog/product', [Catalog::class, 'product']);
Route::get('/{lang}/catalog/models', [Catalog::class, 'models']);
Route::get('/{lang}/dashboard', [Dashboard::class, 'dashboard']);
Route::get('/{lang}/formulary', [Formulary::class, 'formulary']);
Route::get('/{lang}/gallery', [Gallery::class, 'gallery']);
Route::get('/{lang}/login', [Login::class, 'login']);