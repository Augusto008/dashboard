<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Views\CatalogController as Catalog;
use App\Http\Controllers\Views\DashboardController as Dashboard;
use App\Http\Controllers\Views\FormularyController as Formulary;
use App\Http\Controllers\Views\MainController as Main;


Route::get('/', [Main::class, 'addLang']);
Route::get('/{lang}', [Main::class, 'main']);
Route::get('/{lang}/catalog', [Catalog::class, 'catalog']);
Route::get('/{lang}/dashboard', [Dashboard::class, 'dashboard']);
Route::get('/{lang}/Formulary', [Formulary::class, 'formulary']);
