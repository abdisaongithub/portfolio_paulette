<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeatureRequest;
use App\Models\Feature;
use Illuminate\Support\Facades\Storage;

class FeatureController extends Controller
{

    public function index()
    {
        $features = Feature::all();
        return view('dashboard.feature.index', ['features' => $features]);
    }


    public function create()
    {
        return view('dashboard.feature.create');
    }


    public function store(FeatureRequest $request)
    {
        $validated = $request->validated();
        $feature = new Feature($validated);

        $feature->image = Storage::put('public/', $request->file('image'));

        $feature->save();

        return redirect(route('feature.index'))->with('success', 'Successfully Added Feature');
    }


    public function show(Feature $feature)
    {
        //
    }


    public function edit(Feature $feature)
    {
        return view('dashboard.feature.edit', ['feature' => $feature]);
    }


    public function update(FeatureRequest $request, Feature $feature)
    {
        $validated = $request->validated();
        $feature->title = $request['title'];
        $feature->description = $request['description'];
        $feature->link = $request['link'];

        Storage::delete($feature->image);

        $feature->image = Storage::put('public/', $request->file('image'));
        $feature->save();

        return redirect(route('feature.index'))->with('success', 'Successfully Updated Feature');
    }


    public function destroy(Feature $feature)
    {
        Storage::delete($feature->image);

        $feature->delete();

        return redirect(route('feature.index'))->with('success', 'Successfully Deleted Feature');
    }
}
