<?php

use App\Http\Controllers\{
    ProfileController,
    HomeController,
    GaleryJoelController,
    GaleryEtudiantController,
    MovieController,
    Course1Controller,
    Course2Controller,
    Course3Controller,
    ContactController,
     NewspaperController,
};
use App\Http\Controllers\Admin\{
    AccueilController,
    JoelController,
    EtudiantController,
    MoviesController,
    Chapter1Controller,
    Chapter2Controller,
    Chapter3Controller,
    ContactAdmin,
};
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });   
Route::get("/", [HomeController::class, 'index'])->name("accueil");
Route::get('/galerie-joel', [GaleryJoelController::class, 'index'])->name('galerie-joel');
Route::get('/galerie-etudiant', [GaleryEtudiantController::class, 'index'])->name('galerie-etudiant');
Route::get('/movie', [MovieController::class, 'index'])->name('movie');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('subscribe',[NewspaperController::class,'store'])->name('subscribe');
Route::get('unsubscribe/{delete}',[NewspaperController::class,'delete'])->name('unsubscribe.delete');
Route::get('/popup',[NewspaperController::class,'show'])->name('popup');
Route::post('/adminNotification',[NewspaperController::class,'adminNotification'])->name('adminNotification');


Route::resource('course/Cours-du-logiciel-1', Course1Controller::class);
Route::resource('course/Cours-du-logiciel-2', Course2Controller::class);
Route::resource('course/Cours-du-logiciel-3', Course3Controller::class);

Route::middleware(['auth', 'verified', 'role'])->group(function () {
    Route::get('accueil-admin', [AccueilController::class, 'index'])->name('accueil-admin');
    Route::post('accueil-admin-store', [AccueilController::class, 'store'])->name('accueil-store');
    Route::delete('accueil-admin-delete/{image}', [AccueilController::class, 'destroy'])->name('accueil-delete');
    
    Route::get('joel-admin', [JoelController::class, 'index'])->name('joel-admin');
    Route::post('joel-admin-store', [JoelController::class, 'store'])->name('joel-store');
    Route::delete('joel-admin-delete/{image}', [JoelController::class, 'destroy'])->name('joel-delete');

    Route::get('etudiant-admin', [EtudiantController::class, 'index'])->name('etudiant-admin');
    Route::post('etudiant-admin-store', [EtudiantController::class, 'store'])->name('etudiant-store');
    Route::delete('etudiant-admin-delete/{image}', [EtudiantController::class, 'destroy'])->name('etudiant-delete');

    Route::get('movies-admin', [MoviesController::class, 'index'])->name('movies-admin');
    Route::post('movies-admin-store', [MoviesController::class, 'store'])->name('movies-store');
    Route::delete('movies-admin-delete/{movie}', [MoviesController::class, 'destroy'])->name('movies-delete');


    Route::get('chapter1-admin', [Chapter1Controller::class, 'index'])->name('chapter1-admin');
    Route::post('chapter1-admin-store', [Chapter1Controller::class, 'store'])->name('chapter1-store');
    Route::get('chapter1-admin-add/{course1}', [Chapter1Controller::class, 'add'])->name('chapter1-add');
    Route::post('chapter1-admin-create/{course1}', [Chapter1Controller::class, 'create'])->name('chapter1-create');
    Route::delete('chapter1-admin-delete/{course1}', [Chapter1Controller::class, 'destroy'])->name('chapter1-delete');

    Route::get('chapter2-admin', [Chapter2Controller::class, 'index'])->name('chapter2-admin');
    Route::post('chapter2-admin-store', [Chapter2Controller::class, 'store'])->name('chapter2-store');
    Route::get('chapter2-admin-add/{course2}', [Chapter2Controller::class, 'add'])->name('chapter2-add');
    Route::post('chapter2-admin-create/{course2}', [Chapter2Controller::class, 'create'])->name('chapter2-create');
    Route::delete('chapter2-admin-delete/{course2}', [Chapter2Controller::class, 'destroy'])->name('chapter2-delete');

    Route::get('chapter3-admin', [Chapter3Controller::class, 'index'])->name('chapter3-admin');
    Route::post('chapter3-admin-store', [Chapter3Controller::class, 'store'])->name('chapter3-store');
    Route::get('chapter3-admin-add/{course3}', [Chapter3Controller::class, 'add'])->name('chapter3-add');
    Route::post('chapter3-admin-create/{course3}', [Chapter3Controller::class, 'create'])->name('chapter3-create');
    Route::delete('chapter3-admin-delete/{course3}', [Chapter3Controller::class, 'destroy'])->name('chapter3-delete');

    Route::get('newspaper-admin', [ContactAdmin::class, 'index'])->name('newspaper-admin');
    Route::post('newspaper-admin-store', [ContactAdmin::class, 'marketingStore'])->name('newspaper-admin-store');

    //  Route::get('newspaper-all',[NewspaperController::class,'index'])->name('newspaper.all');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
