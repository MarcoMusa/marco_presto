<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Requests\AnnouncementRequest;

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



    public function create(Request $request)
    {
        $uniqueSecret = $request->old(
            'uniqueSecret',
            base_convert(sha1(uniqid(mt_rand())), 16, 36)
        );

        return view('announcements.create', compact('uniqueSecret'));
    }


    public function store(AnnouncementRequest $request)

    {

        $a = new Announcement();

        $a->title = $request->input('title');
        $a->body = $request->input('body');
        $a->category_id = $request->input('category');

        $a->save();


        return redirect('/')->with('announcement.created.success', 'ok');
    }
}
