<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\AnalyticController;
use App\Http\Controllers\MarcaController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/home", [HomeController::class, "index"]);
Route::get("/home/{id}", [HomeController::class, "show"]);

Route::get("/info", [InfoController::class, "index"]);
Route::get("/info/{id}", [InfoController::class, "show"]);

Route::get("/faq", [FaqController::class, "index"]);
Route::get("/faq/{id}", [FaqController::class, "show"]);

Route::get("/contato", [ContatoController::class, "index"]);
Route::get("/contato/{id}", [ContatoController::class, "show"]);

Route::get("/fotos", [FotoController::class, "index"]);
Route::get("/fotos/{id}", [FotoController::class, "show"]);

Route::get("/mobile", [MobileController::class, "index"]);
Route::get("/mobile/{id}", [MobileController::class, "show"]);

Route::get("/slides", [SlideController::class, "index"]);
Route::get("/slides/{id}", [SlideController::class, "show"]);

Route::get("/produtos", [ProdutoController::class, "index"]);
Route::get("/produtos/{id}", [ProdutoController::class, "show"]);

Route::get("marca/{marca}", [ProdutoController::class, 'marca']);

Route::get("destaque/{destaque}", [ProdutoController::class, 'destaque']);

Route::get("/analytic", [AnalyticController::class, "index"]);

Route::get("/marcas", [MarcaController::class, "index"]);
Route::get("/marca/{id}", [MarcaController::class, "show"]);

Route::get("produto/{id}", [ProdutoController::class, 'getMarca']);
Route::get("marca/{id}/produtos", [MarcaController::class, 'getProdutos']);