<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends ScopesToRequestUuidModel
{
    use HasFactory;
    use IsCommentable;

    /**
     * A Project has many TodoLists
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function todoLists()
    {
        return $this->hasMany(\App\Models\TodoList::class);
    }
}
