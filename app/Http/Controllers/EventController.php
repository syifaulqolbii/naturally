<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // show home page
    public function index()
    {
        return view('events.index', [
            'events' => Event::latest()->simplePaginate(3)
        ]);
    }
}
