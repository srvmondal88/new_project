<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\CustomerController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'is_admin'], function() {
   Route::get('/superhome', [App\Http\Controllers\QuestionController::class, 'superdash'])->name('superadmin-dashboard');
   Route::get('/question-list', [App\Http\Controllers\QuestionController::class, 'questionList'])->name('list');
   Route::get('/question-add', [App\Http\Controllers\QuestionController::class, 'questionadd'])->name('question-add');
   Route::post('/store', [App\Http\Controllers\QuestionController::class, 'store'])->name('store');
   Route::get('/delete/{id}', [App\Http\Controllers\QuestionController::class, 'delete']);
   // Route::get('/edit/{id}', [App\Http\Controllers\QuestionController::class, 'edit']);
});

Route::group(['middleware' => 'customer'], function() {
   Route::get('/cus-home', [App\Http\Controllers\CustomerController::class, 'cusdash'])->name('customers.dashboard');
   Route::post('/store', [App\Http\Controllers\CustomerController::class, 'ansStore'])->name('ans-store');
   Route::get('/customer-plan-list', [App\Http\Controllers\CustomerController::class, 'planlist'])->name('Qlist');
   Route::get('/result', [App\Http\Controllers\CustomerController::class, 'result'])->name('result');
});
