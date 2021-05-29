<?php

use Orion\Facades\Orion;

Orion::resource('users', App\Http\Controllers\Api\UsersController::class);
Orion::resource('projects', App\Http\Controllers\Api\ProjectsController::class);
Orion::resource('comments', App\Http\Controllers\Api\CommentsController::class)
    ->except('update')
    ->withoutBatch();
Orion::resource('todo_lists', App\Http\Controllers\Api\TodoListsController::class);
Orion::resource('todos', App\Http\Controllers\Api\TodosController::class);
