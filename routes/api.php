<?php
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\api\authController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('question',QuestionController::class)->middleware('auth:api');
// Route::resource('qs/{id}',QuestionController::class);
Route::resource('answer',AnswerController::class)->middleware('auth:api');
Route::resource('category',CategoryController::class)->middleware('auth:api');
Route::post('/register', [authController::class,'register']);
Route::post('/login', [authController::class,'login']);

