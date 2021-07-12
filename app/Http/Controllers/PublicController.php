<?php

namespace App\Http\Controllers;

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
}
