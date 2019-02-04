<?php

Route::get('/', 'HomeController@getHome')->name('home');
Route::get('/contactanos', 'HomeController@getContacto')->name('contacto');

Route::get('/productos/maquinarias', 'HomeController@getMaquinarias')->name('maquinarias');
Route::get('/productos/maquinarias/{marca}/{producto?}', 'HomeController@getMaquinariasMarca');
