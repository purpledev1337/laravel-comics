<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\VarDumper\Cloner\Data;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeCards@home') -> name('home');

Route::get('header', 'HeaderLinks@header') -> name('header');

Route::get('comics', 'HomeCards@comics') -> name('comics');