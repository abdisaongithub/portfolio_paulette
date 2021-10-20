<?php

namespace App\Http\Controllers;

use App\Http\Requests\BackgroundRequest;
use App\Models\Background;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BackgroundController extends Controller
{
    public function index()
    {
        $background = Background::all();
        return view('dashboard.bg.index', ['background' => $background]);
    }


    public function create()
    {
        return view('dashboard.bg.create');
    }


    public function store(BackgroundRequest $request)
    {
        $validated = $request->validated();
        $background = new Background($validated);
        $background->image = Storage::disk('local')->put('public/', $request->file('image'));

        $background->save();

        return redirect(route('background.index'))->with('success', 'Successfully Added Background');

    }


    public function show(Background $background)
    {
        //
    }


    public function edit(Background $background)
    {
        return view('dashboard.bg.edit', ['background' => $background]);
    }


    public function update(Request $request, Background $background)
    {
        //
    }


    public function destroy(Background $background)
    {
        Storage::delete($background->image);
        $background->delete();
        return redirect(route('background.index'))->with('success', 'Successfully Deleted Background');
    }
}
