<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        return view('dashboard.project.index', ['projects' => $projects]);
    }


    public function create()
    {
        return view('dashboard.project.create');
    }


    public function store(ProjectRequest $request)
    {
        $validated = $request->validated();
        $project = new Project($validated);
        $project->save();

        return redirect(route('project.index'))->with('success', 'Successfully Create A Project');
    }


    public function show(Project $project)
    {
        //
    }


    public function edit(Project $project)
    {
        return view('dashboard.project.edit', ['project' => $project]);
    }


    public function update(ProjectRequest $request, Project $project)
    {
        $validated = $request->validated();
        $project->link = $validated['link'];
        $project->description = $validated['description'];
        $project->save();

        return redirect(route('project.index'))->with('success', 'Successfully Create A Project');
    }


    public function destroy(Project $project)
    {
        $project->delete();
        return redirect(route('project.index'))->with('success', 'Successfully Deleted A Project');
    }
}
