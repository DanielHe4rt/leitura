<?php

namespace App\Repositories\Projects;

use App\Models\Project\Exclusive;

class ExclusiveRepository
{
    private Exclusive $model;

    public function __construct(Exclusive $model)
    {
        $this->model = $model;
    }

    public function create(array $payload)
    {
        return $this
            ->model
            ->newQuery()
            ->create($payload);
    }
}
