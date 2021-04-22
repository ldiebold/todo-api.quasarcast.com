<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;
use Orion\Http\Controllers\Controller;

class UsersController extends Controller
{
    use DisableAuthorization;
    use DisablePagination;

    /**
     * @var string $model
     */
    protected $model = User::class;
}
