<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('test1', function () {
    return ('welcome');
}) -> name ('a');
Route::get('test2/{id?}', function ($id) {
        return ($id);
})-> name ('b');
//Route::get('test3/{string}', function ($string) {
  //      return ($string);
//})-> name ('c');
