<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;
use Orion\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    use DisableAuthorization;
    use DisablePagination;

    /**
     * @var string $model
     */
    protected $model = Project::class;
}
