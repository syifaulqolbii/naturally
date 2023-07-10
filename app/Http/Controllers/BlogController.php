<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create()
    {
        $tags = Tag::all();
        return view('blogs.create', compact('tags'));
    }

    //store blogid
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required|max:255',
            'tag' => 'required',
            'article' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        Blog::create($formFields);

        return redirect('/')->with('message', 'Your blog has been added!');
    }
}
