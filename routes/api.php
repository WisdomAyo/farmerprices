<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'prefix' => 'v1',
    'as' => 'api.',
    'middleware' => ['auth:api']
], function () {
    //lists all users
    Route::post('/all-user', 'API\ V1\ApiController@allUsers')->name('all-user');
});

Route::post('register', 'API\RegisterController@register');
//Route::post('api/login', 'API\RegisterController@login');
Route::get('all-notification', 'API\NotifictionsController@GetAllNotification');
Route::get('all-agent-notification/{id}', 'API\NotifictionsController@GetNotificationforAgent');
Route::get('agent-categories/{id}', 'API\NotifictionsController@GetAgentCategory');
Route::post('save-viewed-notification','API\NotifictionsController@registerNotificationView');
Route::any('firebase','API\RegisterController@index');

