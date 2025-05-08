<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangaysController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\PrecinctController;
use App\Http\Controllers\WatchersController;
use App\Http\Controllers\VotingTransactionController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\WatcherslogController;
use App\Http\Controllers\ReportController;


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
    return view('Login');
});
 
Route::get('barangays', [BarangaysController::class,'index'])->name('barangays.index');;
Route::get('Schools', [SchoolController::class,'index'])->name('Schools.index');;
Route::get('Precincts', [PrecinctController::class,'index'])->name('Precincts.index');;
Route::get('Watchers', [WatchersController::class,'index'])->name('Watchers.index');;
Route::get('Candidates', [CandidateController::class,'index'])->name('Candidates.index');;
Route::get('VotingTransactions', [VotingTransactionController::class,'index'])->name('VotingTransaction.index');;
Route::get('TransactionLog', [WatcherslogController::class,'index'])->name('Watcherslog.index');;
Route::get('Reports', [ReportController::class,'index'])->name('ReportController.index');;
Route::get('BarangayReports', [ReportController::class,'test'])->name('ReportController.test');;
 
Route::post('login', [LoginController::class,'authenticate'])->name('login.authenticate');;
Route::post('logout', [LoginController::class,'logout'])->name('login.logout');;
Route::get('userinput', [UserInfoController::class,'index'])->name('login.get');;
Route::post('UpdateVote', [UserInfoController::class,'UpdateVote'])->name('user.update');;