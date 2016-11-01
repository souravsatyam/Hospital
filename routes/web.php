<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/dumpautoload', function()
{
    \Artisan::call('dump-autoload');
    echo 'dump-autoload complete';
});

Route::get('/', function() {
    return view('welcome');
});


//------ DOCTOR CONTROLLER VIEW PAGE --------//

Route::get('doctor/login', array('as'=>'d_login','uses'=>'Doctor\LoginController@login'));
Route::get('doctor/register', array('as'=>'d_register','uses'=>'Doctor\LoginController@register'));
Route::get('doctor/profile', array('as'=>'d_profile', 'uses'=> 'Doctor\ProfileController@index'));

//--------- END HERE ----------------//

//------- Patient Controller View Page ----------------//

Route::get('patient/login', array('as'=>'p_login','uses'=>'Patient\LoginController@login'));
Route::get('patient/register', array('as'=>'p_register', 'uses'=>'Patient\LoginController@register'));
Route::get('patient/profile', array('as'=>'P_profile', 'uses'=>'Patient\ProfileController@index'));


//------  End Here -------------------------------------//

//------ Hospital Controller View Page -----------------------//

Route::get('hospital/login', array('as'=>'h_login', 'uses'=> 'Hospital\LoginController@login'));
Route::get('hospital/register', array('as'=> 'h_register' , 'uses'=>'Hospital\LoginController@register'));
Route::get('hospital/profile', array('as'=>'h_profile', 'uses'=>'Hospital\ProfileController@index'));
Route::get('hospital/editDepartment/{$id}', array('as'=>'h_profile', 'uses'=>'Hospital\ProfileController@editDepartment'));
Route::get('hospital/deleteDepartment/{id}', array('as'=>'h_profile', 'uses'=>'Hospital\ProfileController@deleteDepartment'));
Route::get('hospital/logout', array('as'=>'h_profile', 'uses'=>'Hospital\ProfileController@logout'));

Route::post('hospital/do_register', array('as'=>'do_register', 'uses' => 'Hospital\LoginController@do_register'));
Route::post('hospital/do_login', array('as'=>'do_login', 'uses' => 'Hospital\LoginController@do_login'));
Route::get('hospital/check_session', array('as'=>'do_login', 'uses' => 'Hospital\LoginController@check_session'));
Route::post('hospital/add_department', array('as'=>'add_department', 'uses'=>'Hospital\ProfileController@addDepartment'));
//------ End Here ---------------------------------------------//

//----- MEDICAL CONTROLLER VIEW PAGE -----------------------//

Route::get('medical/login', array('as'=>'m_login', 'uses' => 'Medical\LoginController@login'));
Route::get('medical/register', array('as'=>'m_register', 'uses'=> 'Medical\LoginController@register'));
Route::get('medical/profile', array('as' =>'m_profile', 'uses' => 'Medical\ProfileController@index'));

//-------- END HERE -----------------------------------//


