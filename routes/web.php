<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController; 

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\CetakController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'books'], function(){
    Route::get('/',[BookController::class,'index'])->name('books'); 
    Route::get('create',[BookController::class,'create'])->name('books.create'); 
    Route::post('store',[BookController::class, 'store'])->name('books.store'); 
    Route::delete('{book}/destroy',[BookController::class, 'destroy'])->name('books.destroy');
    Route::get('{book}/edit',[BookController::class, 'edit'])->name('books.edit');
    Route::patch('{book}/update',[BookController::class,'update'])->name('books.update');
    Route::get('books/report', [BookController::class, 'report'])->name('books.report');

});

Route::group(['prefix' => 'category'], function(){
Route::get('create', [CategoryController::class, 'create'])->name('category.create');
Route::post('store', [CategoryController::class, 'store'])->name('category.store');
});

Route::group(['prefix' => 'user'], function(){
    Route::get('/',[UserController::class,'index'])->name('user'); 
    Route::get('create', [UserController::class, 'create'])->name('user.create');
    Route::post('store', [UserController::class, 'store'])->name('user.store');
    Route::get('{user}/edit',[UserController::class, 'edit'])->name('user.edit');
    Route::patch('{user}/update',[UserController::class,'update'])->name('user.update');
    Route::delete('{user}/destroy',[UserController::class, 'destroy'])->name('user.destroy');
    });
Route::group(['prefix' => 'cetak'], function(){
    Route::get('/index',[CetakController::class,'index'])->name('cetak');
    Route::get('/detail/{role}',[CetakController::class,'detail'])->name('cetak.detail');
    Route::get('/kartu/{role}',[CetakController::class,'kartu'])->name('cetak.kartu');
    });
Route::group(['prefix' => 'peminjaman'],function(){
    Route::get('/borrowing',[PeminjamanController::class,'index'])->name('peminjaman');
    Route::get('create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
    Route::post('store', [PeminjamanController::class, 'store'])->name('peminjaman.store');
});

    Route::group(['prefix' => 'rekap-laporan'], function(){
        Route::get('/buku', [PeminjamanController::class, 'rekapbuku'])->name('rekap-laporan.buku');
        Route::get('/periode', [PeminjamanController::class, 'periode'])->name('rekap-laporan.periode');
        Route::get('/peminjaman', [PeminjamanController::class, 'peminjaman'])->name('rekap-laporan.peminjaman');
        Route::get('/pengembalian', [PengembalianController::class, 'show'])->name('rekap-laporan.pengembalian');
        Route::get('/periode/pengembalian', [PengembalianController::class, 'periode'])->name('rekap-laporan.periode.pengembalian');
        Route::get('/semua/pengembalian', [PengembalianController::class, 'all'])->name('rekap-laporan.semua.pengembalian');
    });
    Route::group(['prefix' =>  'notifikasi'], function(){
        route::get('informasi/{borrowing}',[NotifikasismsController::class, 'create'])->name('notifikasi.informasi');
    
        route::post('denda/{borrowing}','NotifikasismsController@denda')->name('notifikasi.denda');
        route::post('rimainder/{borrowing}','NotifikasismsController@rimainder')->name('notifikasi.rimainder');
    });
    

 
