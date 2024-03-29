<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DepartmentController;

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


Route::post('/user', function (Request $request) {
    #Validation
    User::create([
        "name" => $request->name,
        "email" => $request->email,
        "password" => \Hash::make($request->password)
    ]);
    return "ok";
});
Route::apiResource('companies', CompanyController::class);
Route::apiResource('company/departments',DepartmentController::class);
