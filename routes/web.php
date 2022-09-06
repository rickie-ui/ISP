<?php

use App\Models\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\BillingController;

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

/*
| Grouping routes with same middleware
|---------------------------------------------------
| Route::middleware('auth')->group(function () {
|  });
*/

Route::get('/', function () {
    return view('index');
})->middleware('guest');

//show dashboard
Route::get('/dashboard', [UserController::class, 'dash'])->middleware('auth');

//Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Create new user
Route::post('/users', [UserController::class, 'store']);

//Show clients table
Route::get('/manage', [ManageController::class, 'manage'])->middleware('auth');

//Show edit form for clients
Route::get('/manage/{client}/edit', [ManageController::class, 'edit'])->middleware('auth');

//show client details
Route::get('/manage/{client}/view', [ManageController::class, 'show'])->middleware('auth');

//Edit client
Route::put('/manage/{client}', [ManageController::class, 'update'])->middleware('auth');

//delete client
Route::delete('/manage/{client}', [ManageController::class, 'destroy']);

//Show  add client  form
Route::get('/addClient', [ClientController::class, 'show'])->middleware('auth');
//add client
Route::post('/addClient/create', [ClientController::class, 'store'])->middleware('auth');

//show user edit form
Route::get('/information/{user}/edit', [UserController::class, 'edit'])->middleware('auth');
//Edit user
Route::put('/information/{user}', [UserController::class, 'update'])->middleware('auth');

/////Billing / Transaction///////
//get billing page
Route::get('/billing', [BillingController::class, 'billing'])->middleware('auth');
//Show pay form for clients
Route::get('/billing/{client}/pay', [BillingController::class, 'edit'])->middleware('auth');
//add client payment
Route::post('/billing/{client}', [BillingController::class, 'store'])->middleware('auth');


Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');

//Log User out
Route::post('/logout', [UserController::class, "logout"])->middleware('auth');

//Show login
Route::get('/login', [UserController::class, "login"])->name('login')->middleware('guest');

//log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
