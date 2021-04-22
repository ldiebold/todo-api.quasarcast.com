<?php

namespace App\Http\Requests;

use Orion\Http\Requests\Request;

class CommentRequest extends Request
{
    public function commonRules(): array
    {
        return [
            'user_id' => 'exists:App\Models\User,id'
        ];
    }

    // public function storeRules(): array
    // {
    //     return [
    //         'status' => 'required|in:draft,review'
    //     ];
    // }
}
