<?php

use App\Http\Controllers\EloquentRelationshipController;

use Illuminate\Support\Facades\Route;



Route::get('/', [EloquentRelationshipController::class, 'index']);
Route::get('/onetoone-hasone', [EloquentRelationshipController::class, 'OneToOnehasOne']);
Route::get('/onetoone-belongsTo', [EloquentRelationshipController::class, 'OneToOnebelongsTo']);
