<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\StudentController;

// use App\Http\Controllers\ProductController;
// use App\Models\Product;

// Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/tst/cont', [UserController::class, 'test']);

Route::get('/create', [UserController::class,'create']);
Route::get('/update', [UserController::class,'update']);

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

Route::get('/', function () {
    return view('welcome');
});

/*Test mini tasks route */
// Route::get('/test', function () {
//     return '<h1>First test</h1>';
// });
/*include task*/
Route::get('/home', function () {
    return view('home');
});

// Route::get('/nav', function () {
//     return view('include/nav');
// });

// Route::get('/footer', function () {
//     return view('nav');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/test', function () {
//     return view('contact');
// });

/*Basic Task Route "Factoru/Seed" */
//use without controller
// Route::get('/products', function () {
//     $products = Product::all();
//     return view('products.index', compact('products'));
// });

// Route::get('/products', [ProductController::class, 'index']);

/*Master Page Route "Admin dashboard" */
Route::get('/nav', function () {
    return view('nav');
});

Route::get('/side', function () {
    return view('side');
});

// Route::get('/student', function () {
//     return view('students.index');
// });

Route::resource("/student", StudentController::class);

// Route::get('/student', [StudentController::class,'index'])->name('students.index');

// Route::get('/student/create', [StudentController::class,'create'])->name('students.create');

// Route::get('/student', [StudentController::class,'store'])->name('students.store');