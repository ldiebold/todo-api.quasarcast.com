<?php

namespace App\Models;

trait IsCommentable
{
    /**
     * Get all of the model's comments.
     */
    public function comments()
    {
        return $this->morphMany(\App\Models\Comment::class, 'commentable');
    }
}
