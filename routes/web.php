<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\PlanillaHaberesController;
use App\Models\Payroll;
use GuzzleHttp\Middleware;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('dashboard')->middleware('auth')->group(function(){
	Route::get('payrolls',[PayrollController::class,'index'])->name('payroll.index');
    Route::get('payrolls/create',[PayrollController::class,'create'])->name('payroll.create');

    Route::get('planillahaberes',[PlanillaHaberesController::class,'index'])->name('planillahaberes.index');
    Route::get('planillahaberes/create',[PlanillaHaberesController::class,'create'])->name('planillahaberes.create');


    Route::get('employees', [EmployeeController::class,'index'])->name('employee.index');
    Route::get('employees/create',[EmployeeController::class,'create'])->name('employee.create');
    Route::post('employees',[EmployeeController::class,'store'])->name('employee.store');
    Route::get('employees/{employee}/edit',[EmployeeController::class,'edit'])->name('employee.edit');
    Route::put('employees/{employee}',[EmployeeController::class,'update'])->name('employee.update');
    Route::delete('employees/{employee}',[EmployeeController::class,'destroy'])->name('employee.destroy');
});


require __DIR__.'/auth.php';
