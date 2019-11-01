<?php

use App\Http\Controllers\Api\Users\UserController;

Route::group(['middleware' => 'auth:api'], function () {
    Route::resource('users', UserController::class);
});
