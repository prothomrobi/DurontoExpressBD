<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
// Route::get('/', 'FrontendController@index')->name('index');
Route::get('macros', 'FrontendController@macros')->name('macros');

Route::get('/', 'FrontendController@home')->name('index');

Route::get('about', 'FrontendController@about');

Route::get('package', 'FrontendController@package');

Route::get('customer', 'FrontendController@customer');

Route::get('franchising', 'FrontendController@franchising');

Route::get('registration', 'FrontendController@registration')->name('registration1');

Route::get('career', 'FrontendController@career')->name('career1');

Route::get('contact', 'FrontendController@contact');
Route::post('career', 'FrontendController@submitCareer')->name('career');
Route::post('registration', 'FrontendController@submitRegistration')->name('registration');
/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        /*
         * User Account Specific
         */
        Route::get('account', 'AccountController@index')->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update');
    });
});