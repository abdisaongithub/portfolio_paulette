<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Background;
use App\Models\Feature;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Social;

class HomeController extends Controller
{
    public function index()
    {
        $bgs = Background::all();
        $bgs = $bgs->last();
        $abouts = About::all();
        $skills = Skill::all();
        $features = Feature::all();
        $projects = Project::all();
        $socials = Social::all();

        return view('welcome',
            [
                'bgs' => $bgs,
                'abouts' => $abouts,
                'skills' => $skills,
                'features' => $features,
                'projects' => $projects,
                'socials' => $socials,
            ]
        );
    }
}
