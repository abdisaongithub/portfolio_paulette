<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('dashboard.about.index', ['abouts' => $abouts]);
    }

    public function create()
    {
        return view('dashboard.about.create');
    }

    public function store(AboutRequest $request)
    {
        $validated = $request->validated();
        $about = new About($validated);
        $about->image = Storage::put('public/', $request->file('image'));

        $about->save();
        return redirect(route('about.index'))->with('success', 'Successfully Added an About');
    }


    public function show(About $about)
    {
        //
    }


    public function edit(About $about)
    {
        return view('dashboard.about.edit', ['about' => $about]);
    }


    public function update(AboutRequest $request, About $about)
    {
        $validated = $request->validated();

        $about->time = $validated['time'];
        $about->title = $validated['title'];
        $about->detail = $validated['detail'];

        Storage::delete($about->image);

        $about->image = Storage::put('public/', $request->file('image'));

        $about->save();

        return redirect(route('about.index'))->with('success', 'Successfully Updated an About');
    }


    public function destroy(About $about)
    {
        Storage::delete($about->image);

        $about->delete();

        return redirect(route('about.index'))->with('success', 'Successfully Deleted an About');
    }
}
