<?php

Route::get('/', 'HomeController@index')->name('home');

Auth::routes(['register' => true]);



Route::group(
    [
        'prefix' => 'me',
//        'middleware' => 'auth'
    ],
    function () {

        Route::get('', 'DashboardController@index')->name('dashboard.index');

        Route::resource('background', 'BackgroundController');

        Route::resource('skill', 'SkillController');

        Route::resource('about', 'AboutController');

        Route::resource('feature', 'FeatureController');

        Route::resource('project', 'ProjectController');

        Route::resource('social', 'SocialController');

        Route::resource('contact', 'ContactController');

    }
);
