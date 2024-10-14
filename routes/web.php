<?php   
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('plantillas/plantilla1');
});
//Alumno
/*Route::controller(AlumnoController::class)->group(function(){
    Route::get('/alumnos.index', 'index')->name('alumnos.index');
    Route::get('/alumnos.create', 'create')->name('alumnos.create');
    Route::post('/alumnos.store','store')->name('alumnos.store');
    Route::get('/alumnos/{alumno}','show')->name('alumnos.show');
    Route::get('/alumnos/{alumno}/edit','edit')->name('alumnos.edit');
    Route::put('/alumnos/{alumno}/update','update')->name('alumnos.update');
    Route::delete('/alumnos/{alumno}/destroy','destroy')->name('alumnos.destroy');
});*/
Route::resource('alumnos',AlumnoController::class);
Route::resource('plazas',PlazaController::class);
Route::resource('puestos',PuestoController::class);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
