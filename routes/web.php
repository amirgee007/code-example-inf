<?php

use Illuminate\Support\Facades\Route;

/**
 * Not recommended
 *
 * Need to specify namespace and can't jump to methods in phpstorm
 */
Route::group(['namespace' => 'App\Http\Controllers\Example'], function () {
    Route::get('/route-example-1', 'BadController@index');
    Route::get('/route-example-1', [
        'as' => 'route.example.1',
        'uses' => 'BadController@index',
    ]);
});

/**
 * Recommended
 *
 * This will establish the correct reference association.
 * For example,
 * when the Controller class is renamed, phpstorm can fix the references here automatically.
 */
Route::get('/route-example-2', [\App\Http\Controllers\Example\GoodController::class, 'index'])
    ->name('route.example.2');
