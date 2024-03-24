<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'profile_photo',
        'user_des',
    ];

    /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Return the profile image path
     */
    public function getProfilePhotoUrl()
    {
        if ($this->profile_photo) {
            return public_path($this->user->id . '/profile/' . $this->profile_photo);
        }
        return null;
    }
}
