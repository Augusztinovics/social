<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
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
     * Show the application profile settings.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if (!$request->user()->profile) {
            $request->user()->profile()->create();
        }

        return view('user.profile');
    }

     /**
     * Upload profile photo.
     */
    public function uploadProfilePhoto(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,|max:2048',
        ]);

        $profile = $request->user()->profile;

        if ($profile->profile_photo) {
            $old = public_path( 'uploads/' .  $profile->user_id . '/profile/' . $profile->profile_photo);
            if (File::exists($old)) {
                File::delete($old);
            }
        }

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path( 'uploads/' . $profile->user_id . '/profile'), $imageName);

        $profile->profile_photo = $imageName;
        $profile->save();

        return back();
    }

}
