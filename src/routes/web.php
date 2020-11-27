<?php


//Route::get('test_demo', 'Pete\PeteDemo\Http\PeteDemoController@test_demo');
Route::get('test_demo', 'Pete\PeteDemo\Http\PeteDemoController@test_demo')->middleware(['web']);
