<?php

use Illuminate\Support\Facades\Route;
use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $format='A4';
    $orientation='P';

        $pdf =LaravelMpdf::loadView('pdf_voucher',[],['format'=>$format,'orientation'=>$orientation]);






    $output = $pdf->output();

    $response = response($output)
        ->header('Content-Type', 'application/pdf')
        ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
        ->header('Pragma', 'no-cache')
        ->header('Expires', 'Sat, 01 Jan 2000 00:00:00 GMT');

    return $response;
    return view('welcome');
});
