<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //    show dashboard admin
    public function index()
    {
        $totalUser = User::where('role', 'user')->count();
        $totalReaders = Blog::sum('readers');
        $totalActivity = Event::count();
        $events = Event::whereDate('date', '>=', now())
            ->limit(3)
            ->get()
            ->map(function ($event) {
                $event->formattedDate = Carbon::parse($event->date)->format('d M Y');
                return $event;
            });


        return view('admin.dashboardAdmin', [
            'users' => User::all(),
            'blogs' => Blog::latest()->limit(3)->get(),
            'events' => $events,
            'totalUser' => $totalUser,
            'totalReaders' => $totalReaders,
            'totalActivity' => $totalActivity
        ]);
    }

    //    show dashboard activity
    public function activity()
    {
        $events = Event::latest()->filter(request(['search']))->simplePaginate(6)->map(function ($event) {
            $event->formattedDate = Carbon::parse($event->date)->format('d M Y');
            return $event;
        });
        return view('admin.activity', [
            'events' => $events,
        ]);
    }
}
