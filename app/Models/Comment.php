<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends ScopesToRequestIpModel
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * Get the parent commentable model
     */
    public function commentable()
    {
        return $this->morphTo();
    }
}
