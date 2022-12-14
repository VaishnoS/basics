<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProjectController;
use App\Models\Customer;
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
    return view('default_page');
});
Route::get('home', function () {
    return view('home_page');
})->name('home');
Route::get('/component', function () {
    return view('component_l/componentL');
});
Route::get('demo', function () {
    echo "Hello Vaishno";
});
Route::get('demo2/{name}/{id}', function ($name, $id) {
    echo $name . " " . $id;
});
Route::get('bt1', function () {
    return view("bt/bt1");
});

Route::get('modell', function () {
    $data = Customer::all();
    echo "<pre>";
    print_r($data);
});
Route::get('/customer', [CustomerController::class, 'index'])->middleware('roleandguard');
Route::get('/customercreate', [CustomerController::class, 'create'])->name('customercreate');
Route::get('/customer/{id}/destroy', [CustomerController::class, 'destroy']);
Route::get('/customer/{id}/edit', [CustomerController::class, 'edit']);
Route::post('/customer/{id}/update', [CustomerController::class, 'update']);
Route::get('/customer/{id}/show', [CustomerController::class, 'show']);
Route::post('/store', [CustomerController::class, 'store'])->name('store');
Route::get('/helperS', [CustomerController::class, 'helperS'])->name('helperS');
Route::get('/get-sessions', [CustomerController::class, 'getSessions'])->name('get-sessions');
Route::group(['Prefix' => 'member'], function () {
    Route::get('one-to-one-relationship', [MemberController::class, 'index'])->name('member/one-to-one-relationship');
    Route::get('one-to-many-relationship', [MemberController::class, 'many_relationship'])->name('member/one-to-many-relationship');
});
Route::get('/group-binding/{id}', [ProjectController::class, 'index']);
