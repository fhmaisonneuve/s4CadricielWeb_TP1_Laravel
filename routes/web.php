<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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
    return view('welcome');
});


Route::get( '/index', [EtudiantController::class, 'index'])->name('etudiant.index');


// Route::get( '/blog', [EtudiantController::class, 'index'])->name('blog.index');
Route::get( '/etudiant/{etudiant}', [EtudiantController::class, 'show'])->name('etudiant.show');
Route::get( '/etudiant-create', [EtudiantController::class,'create'])->name('etudiant.create');
Route::post( '/etudiant-create', [EtudiantController::class,'store']);
Route::get( '/etudiant-edit/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put( '/etudiant-edit/{etudiant}', [EtudiantController::class, 'update']);
Route::delete( '/etudiant-edit/{etudiant}', [EtudiantController::class, 'destroy'])->name('etudiant.delete');;

// Route::get('/query', [BlogPostController::class, 'query' ]);
