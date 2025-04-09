<?php

Route::group(['middleware' => 'web', 'prefix' => \Helper::getSubdirectory(), 'namespace' => 'Modules\FetchNow\Http\Controllers'], function()
{
    Route::get('/', 'FetchNowController@index');
});
