<?php


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function(){
    Route::group(['prefix' => 'patient'], function(){
        Route::get('/', 'PatientController@Index')->name('patient.index');
        Route::get('/create', 'PatientController@Create')->name('patient.create');
        Route::post('/createsave', 'PatientController@CreateSave')->name('patient.createsave');
    });    
    Route::group(['prefix' => 'drug'], function(){
        Route::get('/', 'DrugController@Index')->name('drug.index');
        Route::get('/create', 'DrugController@Create')->name('drug.create');
        Route::post('/createsave', 'DrugController@CreateSave')->name('drug.createsave');
        Route::get('/edit/{id}', 'DrugController@Edit')->name('drug.edit');
        Route::post('/editsave/{id}', 'DrugController@EditSave')->name('drug.editsave');
        Route::get('/delete/{id}', 'DrugController@Delete')->name('drug.delete');
    });   
    Route::group(['prefix' => 'tool'], function(){
        Route::get('/', 'ToolController@Index')->name('tool.index');
        // Route::get('/create', 'DrugController@Create')->name('drug.create');
        // Route::post('/createsave', 'DrugController@CreateSave')->name('drug.createsave');
    }); 
});



