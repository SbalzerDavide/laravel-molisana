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
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {

    $menu = config('menu-data');

    $name = $request->route()->getName();

    return view('home',compact('menu','name'));
})->name('home');


Route::get('/grano-italiano', function (Request $request) {
    $menu = config('menu-data');

    $name = $request->route()->getName();


    return view('grano-italiano',compact('menu','name'));
})->name('grano-italiano');

Route::get('/tenacita', function (Request $request) {
    $menu = config('menu-data');

    $name = $request->route()->getName();


    return view('tenacita',compact('menu','name'));
})->name('tenacita');

Route::get('/chi-siamo', function (Request $request) {
    $menu = config('menu-data');

    $who = config('chi-siamo');

    $name = $request->route()->getName();

    return view('chi-siamo',compact('menu','name', 'who'));
})->name('chi-siamo');

//**********************product**********************
Route::get('/prodotti', function (Request $request) {
    $menu = config('menu-data');


    $data = config('app-data');

    $lunghe= [];
    $corte= [];
    $cortissime= [];

    foreach ($data as $key => $card){
        $card['id'] = $key;

        if ($card['tipo'] == 'lunga'){
           $lunghe[] = $card; 
        }
        elseif ($card['tipo'] == 'corta'){
            $corte[] = $card;
        }
        elseif ($card['tipo'] == 'cortissima'){
        $cortissime[] = $card;
        }
    };

    $name = $request->route()->getName();

    return view('prodotti',compact('menu', 'name', 'lunghe', 'corte', 'cortissime'));
})->name('prodotti');

Route::get('/product/{id}', function ($id) {
    $menu = config('menu-data');

    $name = 'prodotti';


    $data = config('app-data');
    $length = count($data) -1;

    $product = $data[$id];
    return view('product',compact('product','id','length','menu','name'));
})->name('product');

//**********************food service**********************
Route::get('/food-service', function (Request $request) {
    $menu = config('menu-data');

    $service = config('food-service');

    $name = $request->route()->getName();

    return view('food-service',compact('menu','name','service'));
})->name('food-service');

//**********************ricette**********************
Route::get('/ricette', function (Request $request) {
    $menu = config('menu-data');

    $ricette = config('ricette');

    foreach ($ricette as $key => $ricetta){
        $ricetta['id'] = $key;
        $ricetteCount []= $ricetta;
    };

    $name = $request->route()->getName();

    return view('ricette',compact('menu','name','ricetteCount'));
})->name('ricette');

Route::get('/ricetta/{id}', function ($id) {
    $menu = config('menu-data');

    $name = 'ricette';

    $ricette = config('ricette');


    $length = count($ricette) -1;

    $ricetta = $ricette[$id];
    return view('ricetta',compact('id','length','menu','name', 'ricetta'));
})->name('ricetta');

//**********************impegno**********************
Route::get('/impegno', function (Request $request) {
    $menu = config('menu-data');

    $impegno = config('impegno');

    $name = $request->route()->getName();

    return view('impegno',compact('menu','name','impegno'));
})->name('impegno');

Route::get('/limited-edition', function (Request $request) {
    $menu = config('menu-data');

    $limited = config('limited');

    $name = $request->route()->getName();

    return view('limited-edition',compact('menu','name','limited'));
})->name('limited-edition');

Route::get('/news', function (Request $request) {
    $menu = config('menu-data');

    $name = $request->route()->getName();

    return view('news',compact('menu','name'));
})->name('news');

