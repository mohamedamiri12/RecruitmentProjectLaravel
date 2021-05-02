<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrator;
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

// Admin Routes

Route::get('administrators/{administrator}/suspend', 'App\Http\Controllers\Administrator\AdministratorController@suspend');
Route::resource('administrators', App\Http\Controllers\Administrator\AdministratorController::class);

Route::get('administrator/clients/{client}/suspend', 'App\Http\Controllers\Administrator\ClientController@suspend');
Route::get('administrator/clients/{client}/validate', 'App\Http\Controllers\Administrator\ClientController@validateClient');
Route::resource('administrator/clients', App\Http\Controllers\Administrator\ClientController::class);

Route::get('administrator/candidates/{candidate}/suspend', 'App\Http\Controllers\Administrator\CandidateController@suspend');
Route::get('administrator/candidates/search', 'App\Http\Controllers\Administrator\CandidateController@search');
Route::resource('administrator/candidates', App\Http\Controllers\Administrator\CandidateController::class);

Route::get('administrator/missions/{mission}/validate', 'App\Http\Controllers\Administrator\MissionController@validateMission');
Route::get('administrator/missions/{mission}/reject', 'App\Http\Controllers\Administrator\MissionController@rejectMission');
Route::resource('administrator/missions', App\Http\Controllers\Administrator\MissionController::class);

Route::get('administrator/contracts/{contract}/validate', 'App\Http\Controllers\Administrator\ContractController@validateContract');
Route::get('administrator/contracts/{contract}/reject', 'App\Http\Controllers\Administrator\ContractController@rejectContract');
Route::resource('administrator/contracts', App\Http\Controllers\Administrator\ContractController::class);

Route::get('administrator/skills/{skill}/affect', 'App\Http\Controllers\Administrator\skillController@affect');
Route::get('administrator/skills/{skill}/detach', 'App\Http\Controllers\Administrator\skillController@detach');
Route::resource('administrator/skills', App\Http\Controllers\Administrator\SkillController::class);

Route::post('administrator/categories/{category}/addSkill', 'App\Http\Controllers\Administrator\CategoryController@addSkill');
Route::post('administrator/categories/{category}/deleteSkill', 'App\Http\Controllers\Administrator\CategoryController@deleteSkill');
Route::resource('administrator/categories', App\Http\Controllers\Administrator\CategoryController::class);

// Client Routes
Route::resource('clients', App\Http\Controllers\Client\ClientController::class);

Route::get('client/candidates/search', 'App\Http\Controllers\Client\CandidateController@search');
Route::resource('client/candidates', App\Http\Controllers\Client\CandidateController::class);

Route::resource('client/missions', App\Http\Controllers\Client\MissionController::class);
Route::resource('client/contracts', App\Http\Controllers\Client\ContractController::class);

// Candidate Routes

Route::get('candidates/search', 'App\Http\Controllers\Candidate\CandidateController@search');
Route::resource('candidates', App\Http\Controllers\Candidate\CandidateController::class);

Route::resource('candidate/missions', App\Http\Controllers\Candidate\MissionController::class);



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// login Routes

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('register', 'App\Http\Controllers\AuthController@register');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');

});
