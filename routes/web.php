<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Settings\RoleManagement\Role;

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
    return view('dashboard.index');
});


Route::group(['prefix' => 'setting'], function (){
    Route::group(['prefix' => 'role_management'], function (){
        Route::get('role', Role::class)->name('setting.role_management.role');
    });
});