<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
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
     * Show the application settings.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.settings');
    }

    /**
     * Change the user name.
     */
    public function changeName(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:1', 'max:255'],
        ]);

        $user = $request->user();
        $user->name = $request->input('name');
        $user->save();

        return back();
    }

    /**
     * Change the user name.
     */
    public function changeEmail(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'email_confirm_password' => ['required', 'current_password:web']
        ]);

        $user = $request->user();
        $user->email = $request->input('email');
        $user->save();

        return back();
    }
}
