<?php

namespace App\Http\Controllers\Api;

use App\Models\TodoList;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;
use Orion\Http\Controllers\Controller;

class TodoListsController extends Controller
{
    use DisableAuthorization;
    use DisablePagination;

    /**
     * @var string $model
     */
    protected $model = TodoList::class;

    public function filterableBy(): array
    {
        return [
            'label',
            'project_id'
        ];
    }

    public function includes(): array
    {
        return [
            'todos'
        ];
    }
}
