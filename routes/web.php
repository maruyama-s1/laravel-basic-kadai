<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/posts', [PostController::class, 'index']);
// /posts/・・・の形式になると必ず実行されてしまうため、以下をコメントアウト
// Route::get('/posts/{id}', [PostController::class, 'show']);

// 課題_データの作成機能とバリデーションを実装しよう
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
