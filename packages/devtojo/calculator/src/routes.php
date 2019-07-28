<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Devtojo\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Devtojo\Calculator\CalculatorController@subtract');
Route::get('check', 'Devtojo\Calculator\CalculatorController@showForm');
Route::post('check', 'Devtojo\Calculator\CalculatorController@check');