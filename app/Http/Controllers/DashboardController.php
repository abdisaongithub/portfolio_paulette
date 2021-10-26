<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Background;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Post;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Social;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        $backgrounds = Background::all();
        $contacts = Contact::all();
        $features = Feature::all();
        $posts = Post::all();
        $projects = Project::all();
        $skills = Skill::all();
        $socials = Social::all();

        return view(
            'dashboard.index',
            [
                'abouts' => $abouts,
                'backgrounds' => $backgrounds,
                'contacts' => $contacts,
                'features' => $features,
                'posts' => $posts,
                'projects' => $projects,
                'skills' => $skills,
                'socials' => $socials,
            ]
        );
    }
}
