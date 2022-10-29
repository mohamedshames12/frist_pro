<?php

use App\Http\Controllers\ComputersControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
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

Route::get('/',[StaticController::class , "index"])-> name('home.index');
Route::get('/about',[StaticController::class , "about"])-> name('home.about');
Route::resource('stotrs',ComputersControllers::class);
Route::get('/contact',[StaticController::class , "contact"])-> name('home.contact');








// Route::get('/store/{togrey?}/{item?}', function ($togrey = null, $item = null) {
//         if(isset($togrey)){

//             if(isset($item)){

//                 return "<h1>{$item}</h1>";
//             }
//             return "<h2>{$togrey}</h2>";
//         }

//         return "<h2>Store</h2>";
// });




// Route::get('/store', function () {
//     $filter = request("style");
//    if(isset($filter)){
//     return "this page is production <span>".strip_tags($filter)."</span>";
//    }
//    return "this page is all production";
   
// });

