<?php

use App\Http\Controllers\InputformController;
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

Route::get('/', [InputformController::class, 'index'])->name('form.index');
Route::post('/', [InputformController::class, 'create'])->name('form.store');
Route::get('/thanks', [InputformController::class, 'thanks'])->name('form.thanks');