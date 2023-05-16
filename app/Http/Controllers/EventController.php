<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    // show home page
    public function index()
    {
        return view('events.index');
    }
}
