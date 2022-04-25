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
    echo "Home Path";
} );

Route::get("test",function(){
    echo "it's test route";
});

//Route parameter
Route::get("list/{id}",function($id){
    echo "Student List $id";
});

//http://127.0.0.1:8000/std/10/tariq
Route::get("std/{id}/{name}",function($id,$name){
    echo "Student List $id : $name";
});
//http://127.0.0.1:8000/std/10
Route::get("std/{id}",function($id){
    echo "Student List $id";
});

//http://127.0.0.1:8000/work/123213/name/work
Route::get("work/{id}/name/work",function($id){
    echo "Student List $id";
});


//Optional Route Parameter
//http://127.0.0.1:8000/work1/123213
//http://127.0.0.1:8000/work1
Route::get("work1/{id?}",function($id=NULL){
    echo "Student List $id";
});




//Route Parameter validation 

//http://127.0.0.1:8000/evs/12323 ( work )
//http://127.0.0.1:8000/evs/tariq ( not work )
Route::get("evs/{id}",function($id){
    echo $id;
})->where(["id" => "[0-9]{4}"]); //"[0-9]+"

//http://127.0.0.1:8000/class/Php
Route::get("class/{name}",function($name){

    echo $name;
})->where("name","[a-zA-Z]+");


//Assigment 5 upldaoed

///go/PHP => /class/PHP
Route::redirect('/go/PHP', '/class/PHP');



////////////////
// Controller
///////////////


Route::get("first/{id}",[App\Http\Controllers\HelloController::class,"hello"]);
Route::get("student/{name?}",[App\Http\Controllers\StudentController::class,"index"]);


////////////////
/// View/ //
//////////////
Route::get("view",[App\Http\Controllers\ViewController::class,"index"]);

//Template

Route::get("template",[App\Http\Controllers\ViewController::class,"template"]);


//ORM

Route::get("orm",[App\Http\Controllers\ORMController::class,"index"]);
