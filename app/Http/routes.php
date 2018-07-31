<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PageController@getIndex');
Route::get('/product', 'CatalogController@getProduct');
Route::get('/catalog', 'CatalogController@getCatalog');
Route::get('/category', 'CatalogController@getCategory');

Route::get('/automatic',         'CatalogContoroler@getAuto');
Route::get('/automatic/{slug}',  'CatalogController@getAuto');

Route::get('/clients', 								'PageController@getClients');
Route::get('/clients/{slug}', 						'PageController@getClientItem');
Route::get('/clients/{city}/{inst}',  				'PageController@getClientsFilter');

Route::get('/catalog', 			                'CatalogController@getCatalog');
Route::get('/catalog/{category}',               'CatalogController@getCategory');

Route::get('/soft',					            'CatalogController@getSoftCategory');
Route::get('/soft/{category}',					'CatalogController@getCategory');

Route::get('/rosta',					        'CatalogController@getRosta');

Route::get('/catalog/{category}/{product}',		'CatalogController@getProduct');
Route::get('/soft/{category}/{product}', 	'CatalogController@getProduct');



Route::post('/send-price',           'BackController@priceSend');


Route::group(['middleware' => 'auth', 'prefix' => 'adm'], function(){

    Route::get('/create/groupitem_new/{block}/{group}/{owner_id}', ['as' => 'create_groupitem', 'uses' => 'CreateController@createGroupItem']);

    Route::post('/file/upload', 'CreateController@saveFile');

    Route::get('/edit/parents',     	'BackController@editParentGroup');


	Route::get('/edit/informatic',      'BackController@getInformatic');
	Route::get('/edit/informatic/{id}', 'BackController@getInformaticItem');



    Route::get('/edit/about',       'BackController@editAbout');
    Route::get('/edit/staff/{id}',  'BackController@editStaff');



	Route::get('/edit/all',     		'BackController@editAll');
	Route::get('/edit/menu',     		'BackController@editMenu');

	Route::get('/edit/clients',     	'BackController@editClients');
	Route::get('/edit/clients/{id}',     'BackController@editClientItem');



	Route::get('/edit/catalog',			'BackController@editCatalog');
	Route::get('/edit/showcase',		'BackController@editShowcase');
	Route::get('/edit/video',			'BackController@editVideo');
	Route::get('/edit/software',		'BackController@editSoft');


	Route::get('/edit/catalog/{id}',	'BackController@editSubCategory');
	Route::get('/edit/showcase/{id}',	'BackController@editSubCategory');
	Route::get('/edit/video/{id}',		'BackController@editSubCategory');
	Route::get('/edit/software/{id}',	'BackController@editSubCategory');


	Route::get('/edit/auto',			'BackController@editAuto');
    Route::get('/edit/auto/{id}',		'BackController@editAutoItem');

    Route::get('/edit/wipon',			'BackController@editWipon');

    Route::get('/edit/accounting/',					'BackController@editAcc');
	Route::get('/edit/accounting/{id}',				'BackController@editAccCategory');
	Route::get('/edit/accounting/{id}/{tarif_id}',	'BackController@editAccItem');




	Route::get('/edit/software/{id}/{product_id}',	'BackController@editProduct');
	Route::get('/edit/catalog/{id}/{product_id}',	'BackController@editProduct');
	Route::get('/edit/showcase/{id}/{product_id}',	'BackController@editProduct');
	Route::get('/edit/video/{id}/{product_id}',		'BackController@editProduct');





	Route::get('/edit/metriks', 		'BackController@editMetrik');
	Route::get('/edit/city', 		'BackController@editCity');
	Route::get('/edit/inst', 		'BackController@editInstitution');
	Route::get('/edit/course', 		'BackController@editCourse');

	Route::post('/price',           'BackController@price');
});
Route::get('/inf/{slug}', 					'PageController@getInfPage');

Route::post('/rating/send', 				'RaitingController@saveRaiting');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
