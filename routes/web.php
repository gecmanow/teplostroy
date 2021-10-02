<?php

use App\Models\Category;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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
/*
 * Регистрация, вход в ЛК, восстановление пароля
 */
Route::group([
    'as' => 'admin.', // имя маршрута, например admin.index
    'prefix' => 'admin', // префикс маршрута, например admin/index
], function () {
    // админка
    Route::get('/', 'App\Http\Controllers\Admin\AdminController@index')
        ->name('admin');
    // форма регистрации
    Route::get('register', 'App\Http\Controllers\Admin\RegisterController@register')
        ->name('register');
    // создание пользователя
    Route::post('register', 'App\Http\Controllers\Admin\RegisterController@create')
        ->name('create');
    // форма входа
    Route::get('login', 'App\Http\Controllers\Admin\LoginController@login')
        ->name('login');
    // аутентификация
    Route::post('login', 'App\Http\Controllers\Admin\LoginController@authenticate')
        ->name('auth');
    // выход
    Route::get('logout', 'App\Http\Controllers\Admin\LoginController@logout')
        ->name('logout');
    // форма ввода адреса почты
    Route::get('forgot-password', 'App\Http\Controllers\Admin\ForgotPasswordController@form')
        ->name('forgot-form');
    // письмо на почту
    Route::post('forgot-password', 'App\Http\Controllers\Admin\ForgotPasswordController@mail')
        ->name('forgot-mail');
    // форма восстановления пароля
    Route::get(
        'reset-password/token/{token}/email/{email}',
        'App\Http\Controllers\Admin\ResetPasswordController@form'
    )->name('reset-form');
    // восстановление пароля
    Route::post('reset-password', 'App\Http\Controllers\Admin\ResetPasswordController@reset')
        ->name('reset-password');
    Route::get('services', 'App\Http\Controllers\Admin\ServiceController@index')
        ->name('services');
    Route::get('services/create', 'App\Http\Controllers\Admin\ServiceController@create')
        ->name('services.create');
    Route::post('services/store', 'App\Http\Controllers\Admin\ServiceController@store')
        ->name('services.store');
    Route::get('services/{service}', 'App\Http\Controllers\Admin\ServiceController@show');
    Route::get('services/{service}/edit', 'App\Http\Controllers\Admin\ServiceController@edit');
    Route::post('services/update/{service}', 'App\Http\Controllers\Admin\ServiceController@update')
        ->name('services.update');
    Route::post('services/destroy', 'App\Http\Controllers\Admin\ServiceController@destroy');
});

Route::get('tovary-i-uslugi', '\App\Http\Controllers\CategoryController@index')->name('categories');
Route::get('tovary-i-uslugi/{category_url}', '\App\Http\Controllers\CategoryController@show');
Route::get('tovary-i-uslugi/{category_url}/{service_url}', '\App\Http\Controllers\ServiceController@show');
Route::get('tovary-i-uslugi/realizovannye-proekty', '\App\Http\Controllers\ServiceController@projects')->name('projects');
Route::get('vakansii-kompanii', '\App\Http\Controllers\ServiceController@vacancy')->name('vacancy');
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
