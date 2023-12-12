<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\postsController;
use App\Http\Controllers\AccountController;

Route::get('/about', [Usercontroller::class, 'about']);
Route::get('/posts', [postsController::class, 'index']);

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

//Route::get('/', function () {
//    $mylist = [2, 9, 10, 16, 2003, 2004];
//
//    return view('greeting')
//        ->with('mylist', $mylist);
//});
//
//Route::get('/posts.index', function (){
//    return view('posts.index');
//});

Route::get('/page1', function () {
    return view('page1');
});

Route::get('/index2', function () {
    return view('index2');
});

Route::get('/index3', function(){
    return view('index3');
});

Route::get('/index4', function(){
    return view('index4');
});

Route::get('/index5', function(){
    return view('index5');
});

Route::get('/submit', function (){
    return view('submit');
});

Route::get('/faq', function(){
    return view('faq');
});


Route::get('/login', function(){
    return view('login');
});
Route::get('/', function(){
    return view('login');
});

Route::get('/register',function(){
    return view('register');
});

Route::get('/index-admin', function(){
    return view('index-admin');
});

Route::get('/404', function(){
    return view('404');
});
Route::get('/page2', function (){
    return view('page2');
});
Route::get('/page3', function (){
    return view('page3');
});
Route::get('/confirm', function(){
    return view('confirm');
});
// Route::post('/product-add', function (Request $req){
////    ProductController::saveProduct($req);
//
// });

// product
Route::get('product-add', [ProductController::class, 'addProduct']);
Route::get('product-list', [ProductController::class, 'index']);
Route::get('product-edit/{id}', [ProductController::class, 'editProduct']);
Route::get('product-delete/{id}', [ProductController::class, 'deleteProduct']);

Route::post('product-save', [ProductController::class, 'saveProduct']);
Route::post('product-update', [ProductController::class, 'updateProduct']);

// account
Route::post('account-check', [AccountController::class, 'checkAccount']);
Route::post('account-create', [AccountController::class, 'createAccount']);

// page
Route::post('check-payment', [ProductController::class, 'checkPayment']);

//Route::prefix('user')->group(function () {
//
//Route::controller(Usercontroller::class)->group(function () {
//    Route::get('/user/index', 'index');
//    Route::get('/user/show', 'show');
//    Route::get('/user/goodbye', 'goodbye');
//    });
//});


//Route::get('/submit', function(){
//    return 'This is home page';
//});
//
//Route::get('/submit', function(){
//    return view('submit');
//});
//
//Route::get('/postSubmit',function(){
//    return "This is the submit result.";
//})->middleware(['EnsureTokenIsValid']);
