<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // show activity page
    public function index()
    {
        return view('events.index', [
            'events' => Event::latest()->filter(request(['search']))->simplePaginate(3)
        ]);
    }


    public function show(Event $event)
    {
        $dateFromDatabase = $event->date;

        return view('events.show', compact('event', 'dateFromDatabase'));
    }


    // show create form
    public function create()
    {
        return view('events.create');
    }

    //store new event
    public function store(Request $request)
    {
        $formField = $request->validate([
            'name' => 'required|max:255',
            'location' => 'required|max:255',
            'date' => 'required|date',
            'description' => 'required',
            'quota' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $formField['image'] = $request->file('image')->store('images', 'public');
        }

        Event::create($formField);
        return redirect('/')->with('message', 'New event has been created');
    }

    // show edit form
    public function edit(Event $event)
    {
        return view('events.edit', ['event' => $event]);
    }

    // update event
    public function update(Request $request, Event $event)
    {
        $formField = $request->validate([
            'name' => 'required|max:255',
            'location' => 'required|max:255',
            'date' => 'required|date',
            'description' => 'required',
            'quota' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $formField['image'] = $request->file('image')->store('images', 'public');
        }

        $event->update($formField);
        return back()->with('message', 'Event has been updated');
    }

    // delete event
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect('/')->with('message', 'Event has been deleted');
    }
}
