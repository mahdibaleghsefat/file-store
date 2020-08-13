<?php

Route::group([
    'namespace' => 'Baleghsefat\User\Http\Controllers',
    'middleware' => ['web']
], function ($router) {
    // login
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login')->name('login');

    // verify
    Route::post('/code/verify', 'Auth\VerificationController@verify')->name('verification.verify');
//    Route::post('/code/resend', 'Auth\VerificationController@resend')->name('verification.resend');
    Route::get('/code/verify', 'Auth\VerificationController@show')->name('verification.notice');

    // register
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Auth\RegisterController@register')->name('register');
});

Route::group([
    'namespace' => 'Baleghsefat\User\Http\Controllers',
    'middleware' => ['web', 'registerVerified']
], function ($router) {
    Route::get('/home', function () {
        return 'asd';
    })->name('home');

});

Route::get('asd', function () {
    return 'asdasd';
})->name('asd');
