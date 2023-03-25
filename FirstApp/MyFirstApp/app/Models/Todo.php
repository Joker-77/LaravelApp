<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['title'];
    protected $guarded = [];
    protected $hidden = [];
    protected $casts = [];


    /**
     * if you want model binding to use a default database column 
     * other than id when retrieving a given model class 
     * *always search with route key as title.
     * return @entity
     */
    // public function getRouteKeyName()
    // {
    //     # default...
    //     // return 'id';

    //     return 'title';
    // }
}
