<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\EventController;
use \App\Http\Controllers\Api\AttendeeController;

Route::apiResource('events', EventController::class);
Route::apiResource('events.attendee', AttendeeController::class)
->scoped(['attendee' => 'event']);
