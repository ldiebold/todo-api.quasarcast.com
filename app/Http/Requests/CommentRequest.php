<?php

namespace App\Http\Requests;

use Orion\Http\Requests\Request;

class CommentRequest extends Request
{
    public function commonRules(): array
    {
        return [
            'user_id' => 'exists:App\Models\User,id',
            'body' => 'required'
        ];
    }
}
