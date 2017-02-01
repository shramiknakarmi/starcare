<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
});

Route::get('/slider', function () {
    return view('admin.pages.slider_creation');
});

Route::get('/menu', function () {
    return view('admin.pages.menu_creation');
});
Route::get('/pages', function () {
    return view('admin.pages.page_creation');
});

Route::get('/services', function () {
    return view('admin.pages.service_creation');
});

Route::get('/messages', function () {
    return view('admin.pages.message_list');
});
