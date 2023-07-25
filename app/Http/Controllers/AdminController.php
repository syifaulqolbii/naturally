<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use App\Models\User;
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
            ->get();


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
        $events = Event::latest()->filter(request(['search']))->simplePaginate(6);
        return view('admin.activity', [
            'events' => $events,
        ]);
    }

    //    show dashboard article
    public function article()
    {
        $blogs = Blog::latest()->filter(request(['search']))->simplePaginate(6);
        return view('admin.article', [
            'blogs' => $blogs,
        ]);
    }

    public function user()
    {
        $users = User::where('role', 'user') // Hanya ambil data user dengan role "user"
        ->withCount('transaksis') // Menghitung jumlah event yang diikuti oleh setiap user
        ->latest()
            ->filter(request(['search']))
            ->simplePaginate(6);

        return view('admin.user', [
            'users' => $users,
        ]);
    }
}
