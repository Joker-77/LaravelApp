<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
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

    public function uploadImage(Request $request)
    {
        // dd($request->file('image'));
        // dd($request->image);
        // dd($request->hasFile('image'));
        if ($request->hasFile('image')) {
            // $request->file('image')->store('images');
            $this->deleteOldImage();
            $filename = $request->file('image')->getClientOriginalName();
            $request->image->storeAs('images', $filename, 'public');
            $user = auth()->user();
            $user_id = $user->id;
            User::find($user_id)->update(['image_url' => $filename]);
            // auth()->user()->update(['image_url' => '']);
            return redirect()->back();
        }
        // dd($request->file('image')->getClientOriginalName());
        // return view('home');
    }
}
