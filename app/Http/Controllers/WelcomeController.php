<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    /**
     * Show the application welcome page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Switch to the selected language
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function languageSwitch(Request $request)
    {
        $lg = $request->input('language', 'en');
        session(['lg' => $lg]);

        return redirect()->back()->with(['language_switched' => $lg]);
    }

    /**
     * Show the terms
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function terms()
    {
        return view('terms.terms');
    }

    /**
     * Show the privacy policy
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function privacy()
    {
        return view('terms.privacy');
    }
}
