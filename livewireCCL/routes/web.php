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

Route::get('/', PrincipalView::class)
    ->name('principal');

Route::get('/beneficios', BeneficiosView::class);

Route::get('/cursos', CursosView::class)
->name('cursos');

Route::get('/curso/{id}', CursoComponentView::class)
    ->middleware(['auth'])
    ->name('curso.view');

Route::get('/contactos', ContactosView::class);

Route::get('/crear-prueba/{cursoId}', CrearPrueba::class)
    ->middleware(['auth','admin'])
    ->name('crear.prueba');

Route::get('/mostrar-prueba/{pruebaId}', MostrarPrueba::class)
    ->middleware(['auth']);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'admin'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth', 'admin'])
    ->name('profile');

Route::get('/cursos-manager', CursoManagerView::class)
    ->middleware(['auth', 'admin'])
    ->name('cursos-manager');

require __DIR__ . '/auth.php';


