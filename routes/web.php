<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManafactureController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ChemicalFormulaController;
use App\Http\Controllers\UsageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PharmaceuticalPackagingController;
use App\Http\Controllers\SellingUnitController;
use App\Http\Controllers\GenericController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ExpenceCategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\MedicinesGenericController;
use App\Http\Controllers\MedicinePackagingController;
use App\Http\Controllers\PurchaseOrderController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('manafacture', ManafactureController::class);
Route::resource('vendors', VendorController::class);
Route::resource('chemicals', ChemicalFormulaController::class);
Route::resource('usages', UsageController::class);
Route::resource('categorys', CategoryController::class);
Route::resource('packagings', PharmaceuticalPackagingController::class);
Route::resource('units', SellingUnitController::class);
Route::resource('namegenerics', GenericController::class);
Route::resource('customers', CustomerController::class);
Route::resource('roles', RoleController::class);
Route::resource('expencecategorys', ExpenceCategoryController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('medicines', MedicineController::class);
Route::resource('medicinesGenerics', MedicinesGenericController::class);
Route::resource('medicinePackagings', MedicinePackagingController::class);
Route::resource('purchaseOrders', PurchaseOrderController::class);
