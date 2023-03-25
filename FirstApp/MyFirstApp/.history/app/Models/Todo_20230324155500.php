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
     * model binding use a default database column other than id when retrieving 
     * a given model class
     * return @entity
     */
    public function getRouteKeyName()
    {
        # code...
        return 'title';
    }
}
