<?php
use Illuminate\Support\Facades\Route;
Route::group(['middleware' => 'web'], function() {
    Route::get("/", "Cupplisser\Blog\Controllers\BlogPostCtrl@index");
    Route::resource('posts', "Cupplisser\Blog\Controllers\BlogPostCtrl");
    Route::resource('tags', "Cupplisser\Blog\Controllers\BlogTagCtrl",['except' => ['create', 'show']]);
    Route::resource('categories', "Cupplisser\Blog\Controllers\BlogCategoryCtrl",['except' => ['show']]);
    Route::resource('comments', "Cupplisser\Blog\Controllers\BlogCommentCtrl");
});