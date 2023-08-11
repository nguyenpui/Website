<?php
 
use App\Http\Controllers\Front;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', [Front\HomeController::class, 'index']);


Route::get('cart', [Front\HomeController::class, 'cart'])->name ('cart');
Route::get('product', [Front\HomeController::class, 'product'])->name ('product');
Route::get('post', [Front\HomeController::class, 'post'])->name ('post');
Route::get('contact', [Front\HomeController::class, 'contact'])->name ('contact');

// Route::get('/addcart/{id}', [Front\HomeController::class, 'addcart'])->name('addcart');


Route::resource('/crud', CrudController::class);

//đăng kí và đăng nhập
// Route::get('login', [Front\HomeController::class, 'login'])->name('login');
// Route::post('/login', 'AuthController@login');
// Route::get('/register', 'AuthController@showRegistrationForm')->name('register');
// Route::post('/register', 'AuthController@register');



// Route::get('login', [Front\HomeController::class, 'login'])->name ('login');
// Route::get('register', [Front\HomeController::class, 'register'])->name ('register');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('loginPost');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('registerPost');


