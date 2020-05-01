<?php

use Illuminate\Support\Facades\Route;

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

//start may 1,2020 
Route::get('/invoice-pdf', function () {
    // return view('invoice-pdf');
    $amount = 8900;
    $users = App\User::take(10)->get();
    //return $users;
    $pdf = PDF::loadView('pdf.invoice',compact('amount','users'));
    return $pdf->download('invoice.pdf');
});
//end may 1,2020 

