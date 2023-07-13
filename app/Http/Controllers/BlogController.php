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

    // show blog detail
    public function show(Blog $blog)
    {
        return view('blogs.show', [
            'blog' => $blog
        ]);
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

    // show edit form
    public function edit(Blog $blog)
    {
        $tags = Tag::all();
        return view('blogs.edit', ['blog' => $blog], compact('tags'));
    }

    // update blog
    public function update(Request $request, Blog $blog)
    {
        $formFields = $request->validate([
            'title' => 'required|max:255',
            'tag' => 'required',
            'article' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $blog->update($formFields);

        return redirect('/')->with('message', 'Your blog has been updated!');
    }

    // delete blog
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect('/')->with('message', 'Your blog has been deleted!');
    }
}