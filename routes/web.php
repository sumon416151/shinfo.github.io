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
Route::get('/','WelcomeController@index');
Route::get('/about','WelcomeController@about');
Route::get('/service','WelcomeController@service');
//Route::get('/graphics','WelcomeController@graphics');
Route::get('/presentation','WelcomeController@presentation');
Route::get('/project','WelcomeController@project');
Route::get('/contact','WelcomeController@contact');
Route::post('/send-message','WelcomeController@sendMessage');
Route::get('/manage-message','WelcomeController@manageMessage');
Route::get('/delete-message/{id}','WelcomeController@deleteMessage');


//my information===========
Route::get('/add-me','MyInfoController@addInfo');
Route::post('/save-info','MyInfoController@saveInfo');
Route::get('/manage-me','MyInfoController@manageInfo');
Route::get('/edit-info/{id}','MyInfoController@editInfo');
Route::post('/update-info','MyInfoController@updateInfo');
Route::get('/delete-info/{id}','MyInfoController@deleteInfo');



//Graphics info=======
Route::get('/add-photo','GraphicsController@addPhoto');
Route::post('/store','GraphicsController@store')->name('store');
Route::get('/manage-graphics','GraphicsController@manageImage');
Route::get('/edit-graphics/{id}','GraphicsController@editImage');
Route::post('/update-graphics','GraphicsController@updateImage');
Route::get('/delete-graphics/{id}','GraphicsController@deleteImage');

//Office info=========
Route::get('/add-office','OfficeController@addPhoto');
Route::post('/add-photo','OfficeController@savePhoto');
Route::get('/manage-office','OfficeController@managePhoto');
Route::get('/edit-office/{id}','OfficeController@editPhoto');
Route::post('/update-office','OfficeController@updatePhoto');
Route::get('/delete-photo/{id}','OfficeController@deletePhoto');


//Slider Info=======
Route::get('/add-slider','SliderController@create');
Route::post('/save-slider','SliderController@saveSlider');
Route::get('/manage-slider','SliderController@manageSlider');
Route::get('/edit-photo/{id}','SliderController@editSlider');
Route::post('/update-slider','SliderController@updateSlider');
Route::get('/delete-photo/{id}','SliderController@deleteSlider');

//VIdeo Info========
Route::get('/add-video','VideoController@create');
Route::post('/save-video','VideoController@saveVideo');
Route::get('/manage-video','VideoController@manageVideo');
Route::get('/delete-video/{id}','VideoController@deleteVideo');
Route::get('/edit-video/{id}','VideoController@editVideo');
Route::post('/update-video','VideoController@updateVideo');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
