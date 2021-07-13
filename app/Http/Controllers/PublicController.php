<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    // public function home()
    // {
    //     return view('homepage');
    // }

    // VISUALIZZAZIONE ULTIMI 5 ARTICOLI INSERITI-> data di creazione in modo discendente
    public function home()
    {
        $announcements = Announcement::orderBy('created_at', 'desc')->take(5)->get();
        return view('homepage', compact('announcements'));
    }

    public function announcementsByCategory($name, $category_id)
    {
        $category = Category::find($category_id);
        $announcements = $category->announcements()->paginate(5);
        return view('announcements.announcements', compact('category', 'announcements'));
    }
}
