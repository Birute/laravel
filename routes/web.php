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

//duomenų bazių migracijos database->migrations->create user...

Auth::routes();

Route::get('/skills', 'SkillsController@getSkills');
//paleidžia visus metodus


Route::resource('/friends', 'FriendsController');

Route::get('/testimonials', 'TestimonialsController@getAll')->middleware('auth');

Route::get('/testimonials/{id}', 'TestimonialsController@getSingle')
  -> where(['id'=> '[0-9]+']);


//Route::get('/{page}', 'ShowPage');
//patikrinimas ar toks views egzistuoja, jeigu nėra, metam 404 page



//jei padedame klaustuką prie id ir apibrėžiame null, tada rodo tuščią puslapį
Route::get('/user/{id?}', function ($userid = null) {
  echo $userid;
});

Route::get('/', function () {
    return view('welcome');
})->name('homepage');
//
// Route::get('/about', function () {
//     return view('about');
// });
//
// Route::get('/contact-us', function () {
//     return view('contact-us');
// });
//

Route::get('/home', 'HomeController@index')->name('home');
