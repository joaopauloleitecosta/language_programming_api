<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('/status', [LanguageController::class, 'status']);
Route::get('/languages', [LanguageController::class, 'languages']);
Route::post('/addLanguage', [LanguageController::class, 'addLanguage']);
Route::get('/showLanguage/{id}', [LanguageController::class, 'showLanguage']);
Route::put('/updateLanguage/{id}', [LanguageController::class, 'updateLanguage']);
Route::delete('/deleteLanguage/{id}', [LanguageController::class, 'deleteLanguage']);