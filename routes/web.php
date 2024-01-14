<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

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


route::prefix('students')->group(function() {



    route::get('/index', [StudentController::class, 'show'])->name('students.index');

    route::get('/create', [StudentController::class, 'create']);
    route::post('/store', [StudentController::class, 'store'])->name('students.store');
    // route::get('/{student}', [StudentController::class, 'single'])->name('students.single');
    
    route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit.student');
    route::put('/update/{id}', [StudentController::class, 'update'])->name('update.student');
    
    route::get('/delete/{id}', [StudentController::class, 'destroy'])->name('delete.student');

    
});



//  USER ROUTE

// route::group( 'prefix'=>'user', 'as'=>'user' ,function() {

// });

route::prefix('user')->group(function() {

    route::get('/create', [UserController::class, 'create'])->name('create');
    route::post('/store', [UserController::class, 'store'])->name('store');

    route::get('/{user}', [UserController::class, 'single'])->name('user.single');

    route::get('/index', [UserController::class, 'show'])->name('index');

    route::get('/login', [UserController::class, 'login'])->name('user.login');
    route::post('/login-data', [UserController::class, 'loginData'])->name('login.data');
    route::get('/logout', [UserController::class, 'logout'])->name('user.logout');

    route::get('/dashboard', [UserController::class, 'dash'])->name('user.dash');


    // route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit.user');
    // route::put('/update/{id}', [UserController::class, 'update'])->name('update.user');

    // route::get('/delete/{id}', [UserController::class, 'destroy'])->name('delete.user');

});
