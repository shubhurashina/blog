<?php 

Route::get('/','DashboardController@index'); 
Route::get('/home','DashboardController@home'); 
Route::get('myprofile','ProfileController@profile'); 


 ?>