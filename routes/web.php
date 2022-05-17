<?php

use App\Http\Controllers\ApplicationController;
use App\Models\Application;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => 'auth'] , function(){
    Route::get('/' , [ApplicationController::class, 'index'])->name('applications.index');
    Route::get('/create' , [ApplicationController::class, 'create'])->name('applications.create');
    Route::get('/applications/{application}/edit' , [ApplicationController::class, 'edit'])->name('applications.edit');
    Route::get('/applications/{filter}' , [ApplicationController::class, 'filterByStatus'])->name('applications.filterByStatus');
    Route::get('/application/show' , [ApplicationController::class, 'show'])->name('applications.show');
});


Auth::routes();

