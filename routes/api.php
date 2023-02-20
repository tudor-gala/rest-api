<?php

use App\Http\Controllers\Api\AudioTrackController;
use Illuminate\Support\Facades\Route;

Route::resource('audio-track', AudioTrackController::class);
