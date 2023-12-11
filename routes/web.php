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

Route::get('/', function () {
    return view('welcome');
});

// Menampilkan daftar buku
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Menampilkan form untuk menambah buku baru
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');

// Menyimpan buku baru ke dalam database
Route::post('/books', [BookController::class, 'store'])->name('books.store');

// Menampilkan detail buku
Route::get('/books/show/{id}', [BookController::class, 'show'])->name('books.show');

// Menampilkan form untuk mengedit buku
Route::get('/books/edit/{id}', [BookController::class, 'edit'])->name('books.edit');

// Menyimpan perubahan setelah mengedit buku
Route::put('/books/update/{id}', [BookController::class, 'update'])->name('books.update');

// Menghapus buku
Route::delete('/books/delete/{id}', [BookController::class, 'delete'])->name('books.delete');

