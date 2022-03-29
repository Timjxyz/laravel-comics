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
    $comics = config('comics');
    return view('home',['albums'=>$comics]);
    
});

Route::get('/current-album/{id}', function ($id) {
    
    $comics = config('comics');
    if(is_numeric($id) && $id >=0 && $id < count($comics)){
        $album = $comics[$id];
        return view('current-album',['albums'=>$album]);
    }else{
        abort(404);
    }
    
});