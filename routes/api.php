<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::post("addemployee", [EmployeeController::class, 'store',]);
Route::get("getallemployee", [EmployeeController::class, 'getallemployee',]);
Route::put("updateemployee/{id}", [EmployeeController::class, 'updateemployee',]);
Route::delete("deleteemployee/{id}", [EmployeeController::class, 'deleteemployee',]);