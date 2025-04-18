<?php

namespace App\Http\Controllers\Api\Lab;

use App\Http\Resources\LabResource;
use App\Models\Lab;

class ShowController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Lab $lab)
    {
        return new LabResource($lab);
    }
}
