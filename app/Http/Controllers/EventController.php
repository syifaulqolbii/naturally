<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    // show activity page
    public function index()
    {
        $events = Event::where('quota', '>', 0)
            ->latest()
            ->filter(request(['search']))
            ->simplePaginate(3);

        return view('events.index', [
            'events' => $events,
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
        return redirect('/dashboard/activity')->with('message', 'New event has been created');
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
        return redirect('/dashboard/activity')->with('message', 'Event has been updated');
    }

    // delete event
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect('/dashboard/activity')->with('message', 'Event has been deleted');
    }

    // join event
    public function joinEvent(Request $request, $event)
    {
        // get user id
        $user = Auth::user()->id;

        // insert data to transaction table
        Transaksi::create([
            'user_id' => $user,
            'event_id' => $event,
        ]);

        //update quota
        $event = Event::find($event);
        $event->quota = $event->quota - 1;
        $event->save();

        return redirect('/')->with('message', 'You have joined the event');
    }
}
