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

Route::get('/services/pdf-forms', 'BLServices@pdfForms');
Route::get('/services/mca', 'BLServices@mcaCalculator');
Route::post('/services/pdf-forms/download', 'BLServices@downloadPdf');
Route::post('/services/pdf-forms/preview', 'BLServices@previewPdf');
