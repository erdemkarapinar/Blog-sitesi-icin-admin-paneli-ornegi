<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelController;

Route::get('/panel', [PanelController::class, 'getPanel'])->name('getPanel.admin.panel');
