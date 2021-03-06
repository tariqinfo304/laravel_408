
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

//Route::get("student/{name?}",[App\Http\Controllers\StudentController::class,"index"]);


////////////////
/// View/ //
//////////////
Route::get("view",[App\Http\Controllers\ViewController::class,"index"]);

//Template

Route::get("template",[App\Http\Controllers\ViewController::class,"template"]);


//ORM

Route::get("orm",[App\Http\Controllers\ORMController::class,"index"]);


//Resource conrtoller with resource route
Route::resource("student",App\Http\Controllers\StdController::class)
    ->middleware(["test_route"]);


//HTML template integration into Laravel Blade template

Route::get("/web",[App\Http\Controllers\WebController::class,"index"]);
Route::get("/shop",[App\Http\Controllers\WebController::class,"shop"]);
Route::get("/shop_detail/{id}",[App\Http\Controllers\WebController::class,"shop_detail"]);
Route::get("/contact",[App\Http\Controllers\WebController::class,"contact"]);
Route::get("/checkout",[App\Http\Controllers\WebController::class,"checkout"]);
//Route::get("/product",[App\Http\Controllers\WebController::class,"product"]);
Route::get("/cart",[App\Http\Controllers\WebController::class,"cart"]);

Route::resource("product",App\Http\Controllers\ProductController::class)
                ->middleware("sessionCheck");


Route::get("login",[App\Http\Controllers\UserController::class,"index"]);
Route::post("login",[App\Http\Controllers\UserController::class,"login"]);


Route::get("add_user",[App\Http\Controllers\UserController::class,"user_form"]);
Route::post("add_user",[App\Http\Controllers\UserController::class,"add_user"]);


Route::get("logout",[App\Http\Controllers\UserController::class,"logout"]);



Route::get("one_to_many",[App\Http\Controllers\ORMController::class,"one_to_many"]);

Route::get("one_to_one",[App\Http\Controllers\ORMController::class,"one_to_one"]);


Route::get("many_to_many",[App\Http\Controllers\ORMController::class,"many_to_many"]);

