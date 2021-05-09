<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class TodoList extends ScopesToRequestUuidModel
{
    use HasFactory;
    use IsCommentable;

    /**
     * A TodoList has many Todos
     *
     * @return void
     */
    public function todos()
    {
        return $this->hasMany(\App\Models\Todo::class);
    }
}
