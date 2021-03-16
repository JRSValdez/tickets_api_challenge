<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

//PUBLIC ROUTES

//AUTH
Route::post('/login', [AuthController::class, 'login']);

//PRIVATE ROUTES

//TICKETS
Route::apiResource(
    '/ticket',
    TicketController::class)->middleware('auth:api');

Route::get('/ticket/user/{id}',[TicketController::class,'ticketsByUser'])->middleware('auth:api');

//STATES
Route::get('/states', [\App\Http\Controllers\StateController::class, 'index'])->middleware('auth:api');

//PRIORITIES
Route::get('/priorities', [\App\Http\Controllers\PriorityController::class, 'index'])->middleware('auth:api');
