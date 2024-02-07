<?php

use App\Exam\Controllers\ExamController;
use Illuminate\Support\Facades\Route;

Route::prefix('api/exam')
    ->namespace('\App\Exam\Controllers')
    ->as('exam.')
    ->group(function () {
        Route::get('/', [ExamController::class, 'index'])->name('index');
        Route::post('/result', [ExamController::class, 'result'])->name('result');
    });
