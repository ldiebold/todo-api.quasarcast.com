<?php

namespace App\Http\Requests;

use Orion\Http\Requests\Request;

class TodoRequest extends Request
{
    public function commonRules(): array
    {
        return [
            'label' => 'required|min:3',
            'todo_list_id' => 'nullable|exists:App\Models\TodoList,id'
        ];
    }

    public function storeRules(): array
    {
        return [];
    }
}
