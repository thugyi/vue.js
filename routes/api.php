<?php

Route::ApiResource('/class', 'App\Http\Controllers\Api\SclassController');
Route::ApiResource('/subject', 'App\Http\Controllers\Api\SubjectController');
Route::ApiResource('/section', 'App\Http\Controllers\Api\SectionController');
Route::ApiResource('/student', 'App\Http\Controllers\Api\StudentController');

Route::group([

     'prefix' => 'auth'

], function () {

    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');

});