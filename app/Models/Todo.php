<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Todo extends ScopesToRequestUuidModel
{
    use HasFactory;
    use IsCommentable;
}
