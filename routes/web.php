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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inhealth/', 'operatorController@index');
Route::get('/inhealth/checkCard/', 'checkCardController@index');
Route::post('/inhealth/checkCard/wsResult/', 'wsResultController@check');
Route::post('/inhealth/saveSJP/wsResult/', 'wsResultController@saveSJP');

Route::get('/inhealth/search-sjp/', 'searchSJPController@index')->name('searchsjp');

Route::get('/inhealth/search-sjp/getdata', 'searchSJPController@getdata')->name('searchsjp.getdata');

Route::get('/inhealth/print-sjp/{id}','searchSJPController@printSJP')->name('searchsjp.print');
Route::get('/inhealth/hapus-sjp/{id}','searchSJPController@deleteSJP')->name('searchsjp.deletesjp');
Route::get('/inhealth/detail-sjp/{id}','searchSJPController@detailSJP')->name('searchsjp.detailsjp');
Route::get('/inhealth/update-pulang-sjp/{id}','searchSJPController@updatePulangIndex')->name('updatepulangindex');
Route::post('/inhealth/update-pulang-sjp-send/','wsResultController@updatePulangAct')->name('updatepulangact');

//update pindah ruangan
Route::get('/inhealth/pindahruangan-sjp/{id}','searchSJPController@updatePindahRuanganIndex')->name('updatepindahruanganindex');
Route::post('/inhealth/update-pindah-ruangan-sjp-send/','wsResultController@updatePindahRuanganAct')->name('updatepindahruanganact');
//end update pindah ruangan
Route::get('/inhealth/add-act/{id}','searchSJPController@actIndex')->name('searchsjp.addact');


// Route::post('/inhealth/add-act/wsResult','wsResultController@actPost')->name('searchsjp.addactpost');
Route::post('/inhealth/add-act/simpan','wsResultController@saveAct')->name('searchsjp.addactpost');

//live search
Route::get('typeahead-response',array('as'=>'typeahead.response','uses'=>'searchSJPController@typeahead'));
Route::get('livesearch','searchSJPController@liveSearch')->name('live_search.action');