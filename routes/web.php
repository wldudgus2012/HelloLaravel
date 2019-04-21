<?php

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
    //return '<h1>Hello Foo</h1>';
});

Route::get('/', function () {
    return view('welcome')->with('name', 'Foo');
}); //with(); name이라는 변수명으로 Foo라는 값을 넣어서 welcome 블레이드로 보냄

Route::get('/', function () {
    return view('welcome', [
        'name'=>'Foo',
    ]);
});