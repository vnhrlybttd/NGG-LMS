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





Route::group(['middleware' => 'prevent-back-history','guest'],function(){
    Route::get('/', function () {
        return view('auth.login');
    });
    Auth::routes(['register' => false,'verify' => false,'reset' => false]);
    Route::get('/home', 'HomeController@index');
  });

 


Route::resource('ClientInformation','ClientInformationController');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    
});


Route::resource('Hotel','HotelController');



Route::resource('PropertyListing','PropertyListingController');



//Route::resource('Rooms','RoomsControllerResource');
//Route::resource('RentalInfo','RentControllerResource');


Route::get('PropertyListing/{id}/Units','RoomsController@index')->name('Rooms.index');
Route::get('PropertyListing/{id}/Units/Create','RoomsController@create')->name('Rooms.create');
Route::post('PropertyListing/{id}/Units/Store','RoomsController@store')->name('Rooms.store');
//Route::get('PropertyListing/{id}/Units/Edit','RoomsController@edit')->name('Rooms.edit');


Route::get('PropertyListing/{id}/Units/RentalInfo/{ids}','RentController@index')->name('RentalInfo.index');
Route::get('PropertyListing/{id}/Units/RentalInfo/{ids}/Create','RentController@create')->name('RentalInfo.create');
Route::post('PropertyListing/Units/RentalInfo/Store/{ids}','RentController@store')->name('RentalInfo.store');

Route::get('PropertyListing/{id}/Units/Bills/{ids}','BillsController@index')->name('Bills.index');
Route::get('PropertyListing/{id}/Units/Bills/{ids}/Create','BillsController@create')->name('Bills.create');
Route::post('PropertyListing/Units/Bills/Store/{ids}','BillsController@store')->name('Bills.store');

//Route::get('PropertyListing/{id}/Units/{id}/RentalInfo','RentalInfoController@index')->name('RentalInfo.index');
//Route::get('PropertyListing/RentalInfo/{id}/Create','RentalInfoController@create')->name('RentalInfo.create');



