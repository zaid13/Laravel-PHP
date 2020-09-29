<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/date', function () {
    return view('date');
});
Route::get('/date/text', function () {
    return 'date';
});
Route::get('/date/array/string', function () {
    return ['d','a','t','e'];
});
Route::get('/date/array/int', function () {
    return [1,2,3,4,5,6];
});


Route::get('/date/parameters', function () {
   $variable  = [
       'key1'=> 'value 1' ,
       "key2"=>'value 2'  ,
       "key3"=> 200  ,
    ];


    return view('date',$variable);
});

Route::get('/pizza/list', function () {
    $variable  = [
        'key1'=> 'value 1' ,
        "key2"=>'value 2'  ,
        "key3"=> 200  ,
     ];
 
 
     return view('date',['variable' =>$variable]);
 });

 Route::get('/pizza/maps', function () {
     
    $map_variable  =   ['key1'=> 'key1 1 1'  ,'lower1 2 1 ' => 'lower 1 '  ];

 
     $variable  = [
        'key1'=> 'value 1' ,
        "key2"=>'value 2'  ,
        "key3"=> 200  ,
     ];
 
 
     return view('date',['variable' => $map_variable]  );
 });

 Route::get('/date/pram', function () {
     
    $pram1 = request('pram1');
    $pram2 = request('pram2');

    $map_variable  =   ['key1'=> 'key1 1 1'  ,'lower1 2 1 ' => 'lower 1 '  ];

 
     $variable  = [
        'key1'=> 'value 1' ,
        "key2"=>'value 2'  ,
        "key3"=> 200  ,
     ];
 
 
     return view('date',['variable' => $map_variable ,
                         'pram1' =>$pram1   ,
                         'pram2' =>$pram2   
        ]  );
 });


 Route::get('/wildcard/{id}', function ($id) {

 

     return view('wildcard',[
         "id" =>$id
      


     ]  );
 });
