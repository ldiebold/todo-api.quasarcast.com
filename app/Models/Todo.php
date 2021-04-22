<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Todo extends ScopesToRequestIpModel
{
    use HasFactory;
    use IsCommentable;
}
