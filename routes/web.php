<?php

use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Models\User;
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
    return redirect('/home');
});

// Route::view('register', 'register');
// Route::view('about', 'about');

//first step without protected $fillable
// Route::post('register', function(){
// $register= new Register();
// $register->fullname = request('fullname');
// $register->email = request('email');
// $register->password = request('password');
// $register->confirmpassword = request('confirmpassword');
// $register->mobilenumber = request('mobilenumber');
// $register->save();
// });

//alternetively with protected $fillable
// Route::post('/register', function(){
// Register::create([
// 'fullname' => request('fullname'),
// 'email' => request('email'),
// 'password' => request('password'),
// 'confirmpassword' => request('confirmpassword'),
// 'mobilenumber' => request('mobilenumber')
// ]);
// });
// return redirect('register');
// return view('register');

// Route::get('/dash-board', [DashBoardController::class, 'create'])->middleware('auth');

// Route::get('/dash', [DashBoardController::class, 'edit'])->middleware('auth');

// Route::get('/home', [PageController::class, 'index1']);
// Route::get('/about', [PageController::class, 'index2']);
// Route::get('/contact', [PageController::class, 'index3']);


// Route::get('registerUser', [AuthController::class,'register'])->middleware('guest');
// Route::post('registerUser', [AuthController::class,'registration'])->middleware('guest');

// Route::get('login', [SessionController::class, 'login'])->middleware('guest');

// Route::post('login', [SessionController::class, 'store'])->middleware('guest'); 

// Route::get('logout', [SessionController::class, 'logout'])->middleware('auth');

// Route::get('/add-property', [PropertyController::class, 'create']);
// Route::post('/add-property', [PropertyController::class, 'addProperty'])->name('create-property');
// Route::get('/property-list', [PropertyController::class, 'propertyLists']);

// Route::get('/edit-property/{id}', [PropertyController::class, 'editProperty']);
// Route::post('/edit-property/{id}', [PropertyController::class, 'editProperty']);

// Route::post('/search-record', [PropertyController::class, 'search']);

// Route::post('/update-property', [PropertyController::class, 'updatePropery']);

// Route::get('/delete-property/{id}', [PropertyController::class, 'deleteProperty']);
// Route::post('/delete-property/{id}', [PropertyController::class, 'deleteProperty']);


// Route::get('/page.add-post', [PostController::class, 'addPost']);
// Route::post('/page.add-post', [PostController::class, 'savePost']);
// Route::get('/page.post-list', [PostController::class, 'postList']);

// Route::get('/page.edit-post/{id}', [PostController::class, 'editPost']);

// Route::post('/update-post', [PostController::class, 'updatePost']);

// Route::get('/page.delete-post/{id}', [PostController::class, 'deletePost']);



// Route::get('/test', function(){
//     return view('auth.registerUser');


   
// });

Route::resource('posts', PostController::class);

Route::resource('products', ProductController::class);







