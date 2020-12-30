<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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
    return ['name'=>'Avinash','designation'=>'Developer'];
});


Route::get('/test',function(){
   $name = request('name');
   return view('test',['name'=>$name]);
});


Route::get('/posts/{name}',[PostsController::class,'show']);