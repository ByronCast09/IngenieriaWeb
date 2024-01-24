<?php


use App\Livewire\CursosView;
use App\Livewire\CrearPrueba;
use App\Livewire\ContactosView;
use App\Livewire\MostrarPrueba;
use App\Livewire\PrincipalView;
use App\Livewire\BeneficiosView;
use App\Livewire\CursoManagerView;
use App\Livewire\CursoComponentView;
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

Route::get('/', PrincipalView::class);

Route::get('/beneficios', BeneficiosView::class);

Route::get('/cursos', CursosView::class);

Route::get('/curso/{id}', CursoComponentView::class)->name('curso.view');

Route::get('/contactos', ContactosView::class);

Route::get('/crear-prueba/{cursoId}', CrearPrueba::class)->name('crear.prueba');

Route::get('/mostrar-prueba/{pruebaId}', MostrarPrueba::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::get('/cursos-manager', CursoManagerView::class)
    ->middleware(['auth'])
    ->name('cursos-manager');

require __DIR__ . '/auth.php';


