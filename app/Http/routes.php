<?php
Route::auth();
Route::get('/register', function() {
    return redirect()->guest('login');
});
Route::get('/', 'HomeController@index');