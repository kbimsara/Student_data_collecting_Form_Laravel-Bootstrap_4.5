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
//Page Routing
Route::get('/', function () {
    $data_all=App\Models\StudentModel::all();
    return view('index')->with('data',$data_all);
});
Route::get('/reg', function () {
    return view('register');
});


// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Data Link/Process
Route::post('/save','StudentController@save');
Route::post('/updateData','StudentController@updateData');

//Page redirect/Action
Route::get('/delete/{id}','StudentController@delete');
Route::get('/update/{id}','StudentController@updateView');
