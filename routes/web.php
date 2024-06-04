<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/indexbudget', function () {
    return view('indexbudget');
});

Route::get('/createbudget', function () {
    return view('createbudget');
});

Route::get('/editbudget', function () {
    return view('editbudget');
});

Route::get('/indextransaksi', function () {
    return view('indextransaksi');
});

Route::get('/createtransaksi', function () {
    return view('createtransaksi');
});

Route::get('/edittransaksi', function () {
    return view('edittransaksi');
});

Route::delete('/transactions/{transaction}', [TransactionController::class, 'destroy']);
Route::put('/transactions/{transaction}', [TransactionController::class, 'update']);


Route::get('/edittransaksi/{id}', function ($id) {
    $transaction = App\Models\Transaction::findOrFail($id);
    return view('edittransaksi', ['transaction' => $transaction]);
});

// Tambahkan route ini
Route::post('/update-transaction/{transaction}', [TransactionController::class, 'updateAndRedirect']);
