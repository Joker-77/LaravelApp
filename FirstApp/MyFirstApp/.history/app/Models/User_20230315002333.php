<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image_url'
    ];

    // protected $guarded = [];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /****************** Mutator ****************/

    // public function setPasswordAttribute($password)
    // {
    //     $this->attributes['password'] = bcrypt($password);
    // }

    // /****************** Accessor ****************/
    // public function getNameAttribute($name)
    // {
    //     return strtoupper($name);
    // }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function uploadImage($image)
    {
        (new self())->deleteOldImage();
        $filename = $image->getClientOriginalName();
        $image->storeAs('images', $filename, 'public');
        User::find(auth()->user()->id)->update(['image_url' => $filename]);
    }

    protected function deleteOldImage()
    {
        if ($this->image_url) {
            Storage::delete('/public/images/' . auth()->user()->image_url);
        }
    }
}
