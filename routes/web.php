<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// 1)
Route::get('inverseRelationship','oneToManyRelation@inverseRelationship')->name('inverseRelationship');

// 2)
Route::get('mtmRelation','manyToManyRelation@mtmRelation')->name('mtmRelation');

// 3)
Route::get('manyToManyPost','manyToManyPolymorphic@manyToManyPost'); 
Route::get('manyToManyComment','manyToManyPolymorphic@manyToManyComment');
Route::get('manyToManyVideo','manyToManyPolymorphic@manyToManyVideo');
Route::get('manyToManyPhoto','manyToManyPolymorphic@manyToManyPhoto');
Route::get('manyToManyTag','manyToManyPolymorphic@manyToManyTag');

// 4)
Route::get('eventListener','userController@eventListener')->name('eventListener');
