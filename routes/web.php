<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

// Route::get('/', function () {
//     return view('index', [
//         "title" => "Beranda"
//     ]);
// });

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "gambar" => "libraryicon.png"
    ]);
});

// Route::get('/gallery', function () {
//     return view('gallery', [
//         "title" => "Gallery"
//     ]);
// });

// Route::get('/detail', function () {
//     return view('users/detailbuku', [
//         "title" => "Detail",
//     ]);
// });

//Route::resource('/books', bookController::class);
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books/store', [BookController::class, 'store'])->name('books.store');
Route::get('/', [BookController::class, 'beranda'])->name('beranda');
Route::get('/detail/{id}', [BookController::class, 'detail'])->name('detail');
Route::get('/searchbook', [BookController::class, 'searchbook'])->name('searchbook');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/books/store', [BookController::class, 'store'])->name('books.store');
    Route::get('/books/index', [BookController::class, 'index'])->name('books.index');
    Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
    Route::post('/books/{id}/update', [BookController::class, 'update'])->name('books.update');
    Route::get('/books/{id}/destroy', [BookController::class, 'destroy'])->name('books.destroy');

    Route::get('/exportpdf', [BookController::class, 'exportpdf'])->name('exportpdf');
    Route::get('/exportexcel', [BookController::class, 'exportexcel'])->name('exportexcel');
});
