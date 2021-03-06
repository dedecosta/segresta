<?php

Route::group(['middleware' => ['web', 'verified'], 'prefix' => 'admin', 'namespace' => 'Modules\Report\Http\Controllers'], function()
{
	Route::post('report/gen_eventspec',['as' => 'report.gen_eventspec', 'uses' => 'ReportController@gen_eventspec']);
	Route::post('report/gen_weekspec',['as' => 'report.gen_weekspec', 'uses' => 'ReportController@gen_weekspec']);
	Route::get('report/eventspec', ['as' => 'report.eventspec', 'uses' => 'ReportController@eventspecreport']);
	Route::get('report/weekspec', ['as' => 'report.weekspec', 'uses' => 'ReportController@weekreport']);
	Route::get('report/user', ['as' => 'report.user', 'uses' => 'ReportController@user']);
	Route::post('report/gen_user', ['as' => 'report.gen_user', 'uses' => 'ReportController@gen_user']);

	Route::resource('report', 'ReportController', ['only' => ['store', 'index']]);
	Route::get('report/getData', ['as' =>'report.data', 'uses' => 'ReportController@data']);

});
