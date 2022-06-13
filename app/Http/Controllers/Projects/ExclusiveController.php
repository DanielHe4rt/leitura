<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use App\Http\Requests\Projects\Exclusive\CreateRequest;
use App\Models\Project\Exclusive;
use App\Repositories\Projects\ExclusiveRepository;
use Illuminate\Contracts\View\View;

class ExclusiveController extends Controller
{
    public function __construct(private ExclusiveRepository $repository)
    {
    }

    public function viewNewProject(): View
    {
        return view('projects.exclusive.new');
    }

    public function viewProject(Exclusive $project): View
    {
        return view('projects.exclusive.see', [
            'project' => $project
        ]);
    }

    public function postProject(CreateRequest $request)
    {
        $fields = $request->validated();

        $project = $this->repository->create($fields);

        return redirect()->route('appointments.see-exclusive', ['project' => $project]);
    }
}
