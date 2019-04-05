<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\Auth;



Route::group(['middlewere'=>['web']],function(){



    Route::group(['prefix'=>'admin'],function(){

        Route::get('home',['as'=>'home',function(){

            return "Home";
        }]);
        Route::get('amir',['as'=>'amir',function(){

            return "Amir";
        }]);


    });



Route::get('/',function (){
    return 'Welcome Page';

});

Route::get('cards','CardsController@index');
//dd();
Route::get('cards/{card}','CardsController@show');
Route::post('cards/{card}/notes','NotesController@store');//new notes
Route::get('note/{note}/edit','NotesController@edit');//show note form  to update
Route::patch('notes/{note}','NotesController@update');//update note


});