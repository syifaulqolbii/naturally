<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'blogs' => Blog::latest()->filter(request(['search', 'tag']))->simplePaginate(3),
            'events' => Event::latest()->filter(request(['search']))->simplePaginate(3),
            'tags' => Tag::all()
        ]);
    }
}
