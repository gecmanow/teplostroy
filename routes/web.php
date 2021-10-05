<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\AppController@index')->name('home');
Route::post('poll', 'App\Http\Controllers\AppController@poll')->name('poll');
Route::post('modal', 'App\Http\Controllers\AppController@modal')->name('modal');

Route::get('tovary-i-uslugi', '\App\Http\Controllers\CategoryController@index')->name('categories');
Route::get('tovary-i-uslugi/realizovannye-proekty', '\App\Http\Controllers\ServiceController@projects')->name('projects');
Route::get('tovary-i-uslugi/{category_url}', '\App\Http\Controllers\CategoryController@show');
Route::get('tovary-i-uslugi/{category_url}/{service_url}', '\App\Http\Controllers\ServiceController@show');
Route::get('vakansii-kompanii', '\App\Http\Controllers\ServiceController@vacancy')->name('vacancy');
Route::get('news', '\App\Http\Controllers\ArticleController@index')->name('news');
Route::get('news/{article_url}', '\App\Http\Controllers\ArticleController@show');

Route::get('o-kompanii', '\App\Http\Controllers\PageController@about')->name('about');
Route::get('kak-kupit', '\App\Http\Controllers\PageController@buy')->name('buy');
Route::get('dostavka', '\App\Http\Controllers\PageController@delivery')->name('delivery');
Route::get('otzyvy', '\App\Http\Controllers\PageController@reports')->name('reports');
Route::get('kontakty', '\App\Http\Controllers\PageController@contacts')->name('contacts');

Route::get('onlain-zakaz', '\App\Http\Controllers\PageController@order')->name('order');
Route::post('onlain-zakaz/send', '\App\Http\Controllers\PageController@orderSend')->name('orderSend');
Route::post('onlain-zakaz/step1/send', '\App\Http\Controllers\MultiStepFormController@step1send')->name('step1send');
Route::get('onlain-zakaz/step2', 'App\Http\Controllers\MultiStepFormController@step2')->name('step2');
Route::post('onlain-zakaz/step2/service1', 'App\Http\Controllers\MultiStepFormController@step2service1')->name('step2service1');
Route::post('onlain-zakaz/step2/service2', 'App\Http\Controllers\MultiStepFormController@step2service2')->name('step2service2');
Route::post('onlain-zakaz/step2/service3', 'App\Http\Controllers\MultiStepFormController@step2service3')->name('step2service3');
Route::post('onlain-zakaz/step2/service4', 'App\Http\Controllers\MultiStepFormController@step2service4')->name('step2service4');
Route::get('onlain-zakaz/step3', 'App\Http\Controllers\MultiStepFormController@step3')->name('step3');
Route::post('onlain-zakaz/step3/service1', 'App\Http\Controllers\MultiStepFormController@step3service1')->name('step3service1');
Route::post('onlain-zakaz/step3/service2', 'App\Http\Controllers\MultiStepFormController@step3service2')->name('step3service2');
Route::post('onlain-zakaz/step3/service3', 'App\Http\Controllers\MultiStepFormController@step3service3')->name('step3service3');
Route::get('onlain-zakaz/step4', 'App\Http\Controllers\MultiStepFormController@step4')->name('step4');
Route::post('onlain-zakaz/step4/send', 'App\Http\Controllers\MultiStepFormController@step4send')->name('step4send');
Route::get('thanks', 'App\Http\Controllers\MultiStepFormController@thanks')->name('thanks');
