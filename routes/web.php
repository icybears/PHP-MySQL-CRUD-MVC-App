<?php

use App\Book;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/library', 'BooksController@index')->name('library');

Route::get('/library/search', 'BooksController@search')->name('librarysearch');

Route::get('/library/filter', 'BooksController@filter')->name('libraryfilter');

Route::get('/book/{id}', 'BooksController@show')->name('book');

//
// Admin routes
//

Route::get('/admin', function(){
    return view('admin.index');
})->name('admin.index');

Route::get('/admin/book/create', 'BooksController@create')->name('admin.new_book');

Route::post('/admin/book/create', 'BooksController@store');

Route::get('/admin/books', 'BooksController@manage')->name('admin.books');

Route::get('/admin/users', function(){
    return view('admin.manage_users');
})->name('admin.users');

Route::get('/admin/books/search', 'BooksController@adminSearch')->name('adminsearch');

Route::get('/admin/books/filter', 'BooksController@adminFilter')->name('adminfilter');
