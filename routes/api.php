<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/mailable', function () {
    $invoice = App\Models\Invoice::find(1);
 
    return new App\Mail\InvoicePaid($invoice);
});

Route::post('/EmailController', function () {
    $invoice = App\Controllers\Http\EmailController::store();
 
    return new ($invoice);
});
