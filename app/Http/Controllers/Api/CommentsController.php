<?php

namespace App\Http\Controllers\Api;

use App\Models\Comment;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;
use Orion\Http\Controllers\Controller;

class CommentsController extends Controller
{
    use DisableAuthorization;
    use DisablePagination;

    /**
     * @var string $model
     */
    protected $model = Comment::class;
}
