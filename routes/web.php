<?php

use App\Http\Controllers\PostController;
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

//Array con posts
$posts = [
  ['title' => 'First Post'],
  ['title' => 'Second Post'],
  ['title' => 'Third Post'],
  ['title' => 'Fourth Post'],
];


Route::view('/','welcome')->name('home');
Route::view('/contact','contact')->name('contact');


Route::get('/blog',[PostController::class, 'index'])->name('posts.index');
//Ojo con el orden de las rutas ya que el /create tiene q ir antes de blog/{id}.
//por lo general ponemos al final las rutas que reciban parametros vvariables
Route::get('/blog/create',[PostController::class, 'create'])->name('posts.create');
Route::post('/blog',[PostController::class, 'store'])->name('posts.store');
Route::get('/blog/{post}',[PostController::class, 'show'])->name('posts.show');



Route::view('/about','about')->name('about');
