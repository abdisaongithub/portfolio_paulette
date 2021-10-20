<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillRequest;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('dashboard.skill.index', ['skills' => $skills]);
    }


    public function create()
    {
        return view('dashboard.skill.create');
    }


    public function store(SkillRequest $request)
    {
        $validated = $request->validated();
        $skill = new Skill($validated);
        $skill->save();
        return redirect(route('skill.index'))->with('success', 'Successfully Added Skill');
    }


    public function show(Skill $skill)
    {

    }

    public function edit(Skill $skill)
    {
        return view('dashboard.skill.edit', ['skill' => $skill]);
    }


    public function update(SkillRequest $request, Skill $skill)
    {
        $validated = $request->validated();
        $skill->title = $validated['title'];
        $skill->detail = $validated['detail'];

        $skill->save();

        return redirect(route('skill.index'))->with('success', 'Successfully Updated Skill');
    }


    public function destroy(Skill $skill)
    {
        $skill->delete();

        return redirect(route('skill.index'))->with('success', 'Successfully Deleted Skill');
    }
}
