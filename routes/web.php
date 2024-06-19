<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\WebsiteController;

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

Route::get('/', [WebsiteController::class, 'index']);

Route::get('/sign-up', [WebsiteController::class, 'sign_up_show']);

Route::post('/sign-up', [SignupController::class, 'sign_up_store']);


Route::get('/log-in', [WebsiteController::class, 'login']);

Route::post('/log-in', [LogInController::class, 'index']);

Route::get('/article-details', [WebsiteController::class, 'article_details']);

Route::get('/terms-conditions', [WebsiteController::class, 'terms_conditions']);

Route::get('/privacy-policy', [WebsiteController::class, 'privacy_policy']);



