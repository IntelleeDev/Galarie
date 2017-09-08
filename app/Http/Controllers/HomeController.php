<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $featuredAlbum = $user->albums()->orderBy('id', 'desc')->first();

        $albums = $user->albums()->where('id', '<>', $featuredAlbum->id)->get();

        return view('dash.home', compact('featuredAlbum', 'albums'));
    }
}
