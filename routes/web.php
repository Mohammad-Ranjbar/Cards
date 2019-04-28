<?php

use Illuminate\Support\Facades\Mail;
use \Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
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
    return view('welcome');

});

Route::group(['prefix'=>'api','middleware'=>'auth:api'],function (){

    Route::get('{user}',function (\App\User $user){

        return $user;

    });



});

//Route::post('/',function (Request $request){
//
//   $validator= Validator::make($request->all(),[
//
//       'email.*'=>'required|email',
//
//
//   ],[
//
//       'email.*'=>'this address is not formated probably',
//   ]);
//
//   if ($validator->fails()){
//
//       return back()->withInput()->withErrors($validator);
//   }
//
//   return 'validation was successful';
//
//});

    Route::post('/','PagesController@store');

Route::get('reports','PagesController@index');

Route::get('user/{user}',function (\App\User $user){

    return $user;



});



Route::any('email',function (){

   Mail::send('email.test',[],function ($message){

       $message->from('mj.ranjbar.94@gmail.com','mohammaad');
       $message->to('saghia.mjr@gmail.com','javad')->subject('welcome to my website');


   });

});

Route::get('cards','CardsController@index')->name('cards');

Route::get('cards/{card}','CardsController@show');
Route::post('cards/{card}/notes','NotesController@store');//new notes
Route::get('note/{note}/edit','NotesController@edit');//show note form  to update
Route::patch('notes/{note}','NotesController@update');//update note

    Route::get('/api',function (){

            return ['some'=>'page'];

    })->middleware('throttle:3');

});