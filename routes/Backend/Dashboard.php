<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('companies', 'CompanyManagementController');
Route::resource('vendors', 'VendorManagementController');
Route::resource('products', 'ProductManagementController');
Route::resource('stocks', 'StockManagementController');
Route::resource('sales', 'SalesmenController');
Route::resource('clients', 'ClientsController');
Route::resource('packages', 'ClientsController');
Route::resource('purchases', 'PurchasesController');
Route::resource('terms', 'SalesmenController');

Route::resource('careers', 'CareerController');
Route::get('download_file/{file}', 'CareerController@download')->name('download');
Route::resource('registerusers', 'RegisteruserController');