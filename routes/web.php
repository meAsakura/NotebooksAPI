<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListofNotebooksController;


// get / is main page with control bttns
Route::match(['get', 'post'], '/', [IndexController::class, 'index'])->name('control');

// get /list_of_notebooks show all list of current notebooks in a list
Route::get('/list_of_notebooks', [ListofNotebooksController::class, 'list_of_notebooks'])->name('notebooks');

// post /get_notebook_by_id show notebook by id
Route::post('/get_notebook_by_id', [ListofNotebooksController::class, 'get_notebook_by_id'])->name('notebook');

Route::match(['get', 'delete'],'/notebook_delete', [ListofNotebooksController::class, 'notebook_delete_by_id'])->name('delete_by_id');