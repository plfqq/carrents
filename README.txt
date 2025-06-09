<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
       $employees = Employee::all(); 
       return view('employee.index',compact('employees'));
    }
}









<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee\IndexController;
use App\Http\Controllers\Employee\CreateController;
use App\Http\Controllers\Employee\StoreController;
use App\Http\Controllers\Employee\ShowController;
use App\Http\Controllers\Employee\EditController;
use App\Http\Controllers\Employee\UpdateController;
use App\Http\Controllers\Employee\DestroyController;

Route::prefix('employees')->group(function () {
    Route::get('/', IndexController::class)->name('employee.index');
    Route::get('/create', CreateController::class)->name('employee.create');
    Route::post('/', StoreController::class)->name('employee.store');
    Route::get('/{employee}', ShowController::class)->name('employee.show');
    Route::get('/{employee}/edit', EditController::class)->name('employee.edit');
    Route::patch('/{employee}', UpdateController::class)->name('employee.update');
    Route::delete('/{employee}', DestroyController::class)->name('employee.destroy');
});
