<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('admin')->group(function () {

// section--------------------------------------------------------------------------------------------------------------
    Route::get('/section/create', 'SectionController@create')->name('section.create');
    Route::post('/section/store', 'SectionController@store')->name('section.store');

    Route::get('/section', 'SectionController@index')->name('section.index');
    Route::get('/section/{section_id}', 'SectionController@show')->name('section.show');

    Route::get('/section/{section_id}/edit', 'SectionController@edit')->name('section.edit');
    Route::match(['put', 'patch'], '/section/{section_id}', 'SectionController@update')->name('section.update');

    Route::delete('/section/{section_id}', 'SectionController@destroy')->name('section.destroy');

//article---------------------------------------------------------------------------------------------------------------
    Route::get('/article/create', 'ArticleController@create')->name('article.create');
    Route::post('/article/store', 'ArticleController@store')->name('article.store');

    Route::get('/', 'ArticleController@index')->name('article.index');
    Route::get('/article/{article_id}', 'ArticleController@show')->name('article.show');

    Route::get('/article/{article_id}/edit', 'ArticleController@edit')->name('article.edit');
    Route::match(['put', 'patch'], '/article/{article_id}', 'ArticleController@update')->name('article.update');

    Route::delete('/article/{article_id}', 'ArticleController@destroy')->name('article.destroy');


//Fonts-----------------------------------------------------------------------------------------------------------------
 Route::get('/fonts','FontController@index')->name('font.index');

 Route::get('/fonts/create','FontController@create')->name('font.create');
 Route::post('/fonts/store','FontController@store')->name('font.store');

});

//Home------------------------------------------------------------------------------------------------------------------
Route::get('/','HomeController@index')->name('home.index');
Route::get('/{section_name}/{section_id}','HomeController@sectionArticles')->name('home.sectionArticles');
Route::get('/{article_id}','HomeController@articleShow')->name('homearticle.show');

