<?php

// Computer
$route = env('PACKAGE_ROUTE', '').'/computers/';
$controller = 'Increment\Computer\Http\ComputerController@';
Route::post($route.'create', $controller."create");
Route::post($route.'retrieve', $controller."retrieve");
Route::post($route.'update', $controller."update");
Route::post($route.'delete', $controller."delete");
Route::get($route.'test', $controller."test");

// Computer Usage
$route = env('PACKAGE_ROUTE', '').'/computer_usages/';
$controller = 'Increment\Computer\Http\ComputerUsageController@';
Route::post($route.'create', $controller."create");
Route::post($route.'retrieve', $controller."retrieve");
Route::post($route.'update', $controller."update");
Route::post($route.'delete', $controller."delete");
Route::get($route.'test', $controller."test");

// Branches
$route = env('PACKAGE_ROUTE', '').'/branches/';
$controller = 'Increment\Computer\Http\BranchController@';
Route::post($route.'create', $controller."create");
Route::post($route.'retrieve', $controller."retrieve");
Route::post($route.'update', $controller."update");
Route::post($route.'delete', $controller."delete");
Route::get($route.'test', $controller."test");

// Branch Rates
$route = env('PACKAGE_ROUTE', '').'/branch_rates/';
$controller = 'Increment\Computer\Http\BranchRateController@';
Route::post($route.'create', $controller."create");
Route::post($route.'retrieve', $controller."retrieve");
Route::post($route.'update', $controller."update");
Route::post($route.'delete', $controller."delete");
Route::get($route.'test', $controller."test");
