<?php

Route::group(['middleware' => 'web', 'prefix' => \Helper::getSubdirectory(), 'namespace' => 'Modules\FetchNow\Http\Controllers'], function()
{
    Route::get('/', 'FetchNowController@index');
    Route::get('/fetch-emails', function() {
        Artisan::call('freescout:fetch-emails', [
            '--days' => 7,
            '--unseen' => 0
        ]);
        return redirect()->back()->with('success', 'Emails fetched successfully!');
    })->middleware('auth');
});
