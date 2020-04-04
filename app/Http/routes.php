<?php



Route::group(['prefix'=>'api/v1'],function (){

    Route::resource('meeting','MeetingController',[
        'expect'=>['edit','store']
    ]);

    Route::resource('meeting/registarion','RegistrationController',[
        'only'=>['store','destroy']
    ]);

    Route::post('user','AuthController@store');
    Route::post('user/signin','AuthController@signin');
    
});
