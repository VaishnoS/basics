<?php

use App\Http\Controllers\CustomerController;
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
Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/customercreate', [CustomerController::class, 'create'])->name('customercreate');
Route::get('/customer/{id}/destroy', [CustomerController::class, 'destroy']);
Route::get('/customer/{id}/edit', [CustomerController::class, 'edit']);
Route::post('/customer/{id}/update', [CustomerController::class, 'update']);
Route::get('/customer/{id}/show', [CustomerController::class, 'show']);
Route::post('/store', [CustomerController::class, 'store'])->name('store');
Route::get('/helperS', [CustomerController::class, 'helperS'])->name('helperS');
