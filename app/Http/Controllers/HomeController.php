<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable | Redirect
     */
    public function index(Request $request)
    {
        if (!$request->user()->profile) {
            return redirect(route('profile.index'));
        }
        return view('home');
    }
}
