<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VaultController;
use App\Http\Controllers\StudySessionController;
use App\Http\Controllers\ContentPostController;
use App\Http\Controllers\IssueLogController;
use App\Http\Controllers\ForgeToolController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

// Vault
Route::get('/vault',[VaultController::class, 'index']);
Route::post('/vault',[VaultController::class, 'store']);

// spearhead
Route::get('/spearhead',[StudySessionController::class,'index']);
Route::post('/spearhead', [StudySessionController::class, 'store']);

// signal flare
Route::get('/signalflare',[ContentPostController::class,'index']);
Route::post('/signalflare', [ContentPostController::class, 'store']);
Route::put('/signalflare/{id}', [ContentPostController::class, 'update']);

// iron core
Route::get('/ironcore',[IssueLogController::class,'index']);
Route::post('/ironcore', [IssueLogController::class, 'store']);

// forge
Route::get('/forge',[ForgeToolController::class,'index']);
Route::post('/forge', [ForgeToolController::class, 'store']);

// dashboard
Route::get('/dashboard',[DashboardController::class,'index']);