<?php

namespace App\Http\Controllers\Api;

use App\Models\Todo;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;
use Orion\Http\Controllers\Controller;

class TodosController extends Controller
{
    use DisableAuthorization;
    use DisablePagination;

    /**
     * @var string $model
     */
    protected $model = Todo::class;
}
