<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnouncementRequest;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('homepage');
    }

    public function create()
    {
        return view('announcements.create');
    }

    public function store(AnnouncementRequest $request)

    {

        $a = new Announcement();

        $a->title = $request->input('title');
        $a->body = $request->input('body');

        $a->save();


        return redirect('/')->with('announcement.created.success', 'ok');
    }
}
