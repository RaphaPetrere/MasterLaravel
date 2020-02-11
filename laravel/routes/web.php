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

// use Illuminate\Routing\Route;
Route::get('/', 'HomeController@home')->name('home');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/blog-post/{id}/{welcome?}', 'HomeController@blogPost')->name('blog-post');




















/*Comment section
    // Route::get('/', function () {
    //     // return view('welcome');
    //     return view('home');
    // });
    //There's 2 ways u could do it, the upper one and the bottom one
    Route::get('/', 'HomeController@home')->name('home'); //It's the URL and the name of the Controller + it's action name
    //            and, we're giving them names, so we can call it on layout.blade.php



    Route::get('/blog-post/{id}/{welcome?}', function ($id, $welcome = 1) { ///blog-post/{id} era a rota padrão, ai tamo passando um parametro opcional "definida pelo '?'"
    //se vc n especificar, vai usar o valor padrão 1, senão, ele usa oq vc passar

    rRoute::get('/blog-post/{id}/{welcome?}', function ($id, $welcome = 1) {     
    $pages = [
        1 => [
            'title' => 'page 1'
        ],
        2 => [
            'title' => 'page 2'
        ],
        3 => [
            'title' => 'page 3'
        ],
    ];

    $welcomes = [
        1 => 'Hello from ',
        2 => 'Welcome to '
    ];
    return view('blog-post', [
        'data' => $pages[$id], 
        'welcome' => $welcomes[$welcome]
    ]); //vai ta passando a data dependendo do ID da rota
})->name('blog-post');


*/