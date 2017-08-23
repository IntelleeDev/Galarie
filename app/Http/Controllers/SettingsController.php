<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        return view('dash.setting.home');
    }
}
