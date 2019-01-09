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

Route::get('/services/pdf-forms', 'BLservices@pdfForms');
Route::get('/services/mca', 'BLservices@mcaCalculator');
Route::post('/services/pdf-forms/download', 'BLservices@downloadPdf');
Route::post('/services/pdf-forms/preview', 'BLservices@previewPdf');
Route::get('/services/banks', 'BLservices@banks');
Route::post('/services/banks', 'BLservices@banks');
