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

Route::get('/', 'PagesController@index');

Route::resource('Clients','ClientsController');
Route::post('Clients/list','ClientsController@list');
Route::get('listeNoire','ListedClientController@index');
Route::post('ClientsBan/{id}','ListedClientController@ban');
Route::post('ClientsUnban/{id}','ListedClientController@unban');
Route::post('ClientsBan','ListedClientController@banedData');

Route::resource('Address','AddressController');
Route::post('Address/list','AddressController@list');

Route::resource('AgenceInfo','AgenceInfoController');
Route::post('AgenceInfo/list','AgenceInfoController@list');

Route::resource('Alerts','AlertsController');
Route::post('Alerts/list','AlertsController@list');

Route::resource('CarBrands','CarBrandsController');
Route::post('BrandsList','CarBrandsController@list');

Route::post('ListCars','CarInfoController@list');
Route::get('listeVoitures','CarInfoController@index');

Route::resource('CarCharges','CarChargesController');
Route::post('CarCharges/list','CarChargesController@list');

Route::resource('CarGallery','CarGalleryController');
Route::post('CarGallery/list','CarGalleryController@list');

Route::resource('CarInfo','CarInfoController');
Route::post('CarInfo/list','CarInfoController@list');

Route::resource('CarModels','CarModelsController');
Route::post('ModelList','CarModelsController@list');

Route::resource('CarRent','CarRentController');
Route::post('CarRent/list','CarRentController@list');

Route::resource('Contracts','ContractsController');
Route::post('Contracts/list','ContractsController@list');

Route::resource('Identity','IdentityController');
Route::post('Identity/list','IdentityController@list');

Route::resource('Pages','PagesController');
Route::post('Pages/list','PagesController@list');

Route::resource('Papiers','PapiersController');
Route::post('Papiers/list','PapiersController@list');

Route::resource('PapiersGallery','PapiersGalleryController');
Route::post('PapiersGallery/list','PapiersGalleryController@list');

Route::resource('Parking','ParkingController');
Route::post('Parking/list','ParkingController@list');

Route::resource('TraitsPayment','TraitsPaymentController');
Route::post('TraitsPayment/list','TraitsPaymentController@list');

Route::resource('Vidange','VidangeController');
Route::post('Vidange/list','VidangeController@list');

Route::post('getCountry', 'LocatizationController@getCountry')->name('getCountry');
Route::post('getCity', 'LocatizationController@getCity')->name('getCity');
/* Route::resource([
    'Address' => 'AddressController',
    'AgenceInfo' => 'AgenceInfoController',
    'Alerts'=>'AlertsController',
    'CarBrands'=>'CarBrandsController',
    'CarGallary'=>'CarGallaryController',
    'CarInfo'=>'CarInfoController',
    'CarModels'=>'CarModelsController',
    'CarRent'=>'CarRentController',
    'Clients'=>'ClientsController',
    'Contracts'=>'ContractsController',
    'Identity'=>'IdentityController',
    'Paipers'=>'PapiersController',
    'Parking'=>'ParkingController',
    'Traits'=>'TraitsController',
    'Vidange'=>'VidangeController'
     ]); */
     Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');