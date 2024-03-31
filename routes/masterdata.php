<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\masterdata\BankmasterController;
use App\Http\Controllers\masterdata\BrandmasterController;
use App\Http\Controllers\masterdata\CategorymasterController;
use App\Http\Controllers\masterdata\DepartmentmasterController;
use App\Http\Controllers\masterdata\ImagemasterController;
use App\Http\Controllers\masterdata\PricemasterController;
use App\Http\Controllers\masterdata\RegionmasterController;
use App\Http\Controllers\masterdata\RolemasterController;
use App\Http\Controllers\masterdata\SectionmasterController;
use App\Http\Controllers\masterdata\StatusmasterController;
 

Route::get('/bank',  [BankmasterController::class, 'index'])->name('bank.index');
Route::get('/brand',  [BrandmasterController::class, 'index'])->name('brand.index');
Route::get('/category',  [CategorymasterController::class, 'index'])->name('category.index');
Route::get('/department',  [DepartmentmasterController::class, 'index'])->name('department.index');
Route::get('/image',  [ImagemasterController::class, 'index'])->name('image.index');
Route::get('/price',  [PricemasterController::class, 'index'])->name('image.index');
Route::get('/region',  [RegionmasterController::class, 'index'])->name('image.index');
Route::get('/role',  [RolemasterController::class, 'index'])->name('image.index');
Route::get('/section',  [SectionmasterController::class, 'index'])->name('image.index');
Route::get('/status',  [StatusmasterController::class, 'index'])->name('image.index');
