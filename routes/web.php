<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\UserController;





Route::get('/', [UserController::class, 'store']);

