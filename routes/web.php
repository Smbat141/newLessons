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



Route::get('/',['uses' =>'Admin\FirstController@show','as' => 'home']);
Route::get('/about',['uses'=>'Admin\AboutController@show','as' => 'about']);
Route::match(['get','post'],'/contact/{email?}',['uses'=>'Admin\ContactController@show','as' => 'contact']);
Route::get('/articles',['uses'=>'Admin\Core@getArticles','as' => 'articles']);
Route::get('/article',['uses'=>'Admin\Core@getArticle','as' => 'article']);

//Route::controller('pages','PagesControlle');
//Resource Routes

//Route::get('pages/add','Admin\Core@add');
//Route::resource('pages','Admin\Core');


//Рoute with parameter
/*
Route::get('/page/{name}/{id}', function ($name,$id) {
    echo $name."|".$id;
})->where(['name' => '[A-Za-z]+','id' => '[0-9]+',]);*/

//Group Routes
/*

Route::group(['prefix' => 'admin'],function (){

    Route::get('page/create',function(){

        echo Route::current()->getName();

    })->name('Hovlo');

    Route::get('page/edit',function(){
        echo 'page/edit ';
    });
});
*/