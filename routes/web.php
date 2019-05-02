<?php

use Illuminate\Support\Facades\Mail;
use \Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
//use Illuminate\Support\Facades\Auth;


Route::get('admin',function(){

  return  <<<HTML

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                         <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <title>Document</title>
</head>
<body>
  <h1>Admin</h1>
</body>
</html>


HTML;





});
Route::group(['middlewere'=>['web']],function(){



    Route::group(['prefix'=>'admin'],function(){

        Route::get('home',['as'=>'home',function(){

            return "Home";
        }]);
        Route::get('amir',['as'=>'amir',function(){

            return "Amir";
        }]);


    });

Route::get('users',['as'=>'users','uses'=>'UsersController@index']);

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