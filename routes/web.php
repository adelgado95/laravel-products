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



Route::get('/',['as'=>'index' ,'uses' => function () {
    return view('index');
}]);

Route::resource('product','ProductController');

Route::get('login',['as' => 'login','uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login','Auth\LoginController@login');
Route::get('logout ','Auth\LoginController@logout');

Route::get('producto/test',function(){
    $user = new App\User;
    $user->name = 'mode';
    $user->email = 'c4@mail.com';
    $user->password = Hash::make('123123');
    $user->role = 'moderador';
    $user->save();
    return $user->toArray();

});

// Route::get('product/test',function(){
//     $product = new App\Product;
//     $product->description = 'Penicilina';
//     $product->stock = 100;
//     $product->price = 100.50;
//     $product->generic = 'Penicilina';
//     $product->laboratory = 'Ramos';
//     $product->quantity = '100 mg';
//     $product->save();
//     return $product;

// });


