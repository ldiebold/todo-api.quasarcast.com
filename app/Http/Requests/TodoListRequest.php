<?php

namespace App\Http\Requests;

use Orion\Http\Requests\Request;

class TodoListRequest extends Request
{
    public function commonRules(): array
    {
        return [
            'label' => 'required|min:3',
            'project_id' => 'nullable|exists:App\Models\Project,id'
        ];
    }

    public function storeRules(): array
    {
        return [];
    }
}
