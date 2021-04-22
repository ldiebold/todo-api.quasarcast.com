<?php

namespace App\Http\Requests;

use Orion\Http\Requests\Request;

class UserRequest extends Request
{
    public function commonRules(): array
    {
        return [
            'name' => 'required'
        ];
    }

    // public function storeRules(): array
    // {
    //     return [
    //         'status' => 'required|in:draft,review'
    //     ];
    // }
}
