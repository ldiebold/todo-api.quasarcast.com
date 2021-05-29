<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Orion\Http\Requests\Request;

class ProjectRequest extends Request
{
    public function commonRules(): array
    {

        return [
            'name' => Rule::unique('projects')->where(function ($query) {
                return $query->where('uuid', $this->cookie('uuid'));
            })
        ];
    }

    public function storeRules(): array
    {
        return [];
    }
}
