<?php

use Illuminate\Support\Facades\Route;

// Front-end

// Home Page Route
Route::get('/',[
    'uses' => '\App\Http\Controllers\frontend\ViewController@index',
    'as' => 'home',
]);

// Details Page Route
Route::get('/blog-details/{id}',[
    'uses' => '\App\Http\Controllers\frontend\DetailsController@index',
    'as' => 'blog-details',
]);

// Category Page Route
Route::get('/category/{id}',[
    'uses' => '\App\Http\Controllers\frontend\CategoryController@index',
    'as' => 'category',
]);


// Contact Page Route
Route::get('/contact',[
    'uses' => '\App\Http\Controllers\frontend\ContactController@index',
    'as' => 'contact',
]);
Route::post('/contact-submit',[
    'uses' => '\App\Http\Controllers\frontend\ContactController@contactSubmit',
    'as' => 'contact-submit',
]);


// Search Page Route
Route::get('/search-result',[
    'uses' => '\App\Http\Controllers\frontend\SearchController@index',
    'as' => 'search-result',
]);


// Back-end
Route::group(['middleware' => ['auth:sanctum', 'verified']], function(){
    Route::get('/dashboard',[
        'uses' => '\App\Http\Controllers\admin\AdminController@index',
        'as' => 'dashboard',
    ]);

    // Category Routes
    Route::get('/category-create',[
        'uses' => '\App\Http\Controllers\admin\CategoryController@index',
        'as' => 'category-create',
    ]);
    Route::post('/category-created',[
        'uses' => '\App\Http\Controllers\admin\CategoryController@categoryCreated',
        'as' => 'category-created',
    ]);
    Route::get('/category-manage',[
        'uses' => '\App\Http\Controllers\admin\CategoryController@categoryManage',
        'as' => 'category-manage',
    ]);
    Route::get('/category-edit/{id}',[
        'uses' => '\App\Http\Controllers\admin\CategoryController@categoryEdit',
        'as' => 'category-edit',
    ]);
    Route::post('/category-updated',[
        'uses' => '\App\Http\Controllers\admin\CategoryController@categoryUpdated',
        'as' => 'category-updated',
    ]);
    Route::get('/category-delete/{id}',[
        'uses' => '\App\Http\Controllers\admin\CategoryController@categoryDelete',
        'as' => 'category-delete',
    ]);

    // Blog Routes
    Route::get('/blog-create',[
        'uses' => '\App\Http\Controllers\admin\BlogController@index',
        'as' => 'blog-create',
    ]);
    Route::post('/blog-created',[
        'uses' => '\App\Http\Controllers\admin\BlogController@blogCreated',
        'as' => 'blog-created',
    ]);
    Route::get('/blog-manage',[
        'uses' => '\App\Http\Controllers\admin\BlogController@blogManage',
        'as' => 'blog-manage',
    ]);
    Route::get('/blog-edit/{id}',[
        'uses' => '\App\Http\Controllers\admin\BlogController@blogEdit',
        'as' => 'blog-edit',
    ]);
    Route::post('/blog-updated',[
        'uses' => '\App\Http\Controllers\admin\BlogController@blogUpdated',
        'as' => 'blog-updated',
    ]);
    Route::get('/blog-delete/{id}',[
        'uses' => '\App\Http\Controllers\admin\BlogController@blogDelete',
        'as' => 'blog-delete',
    ]);
});
