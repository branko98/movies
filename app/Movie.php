<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = ['id'];

    const STORE_RULES = [
       'title' => 'required',
       'genre' => 'required',
       'director' => 'required',
       'year' => 'required',
       'storyline' => 'required | min:15'
    ];

    protected $fillable =['title', 'genre', 'director', 'year', 'storyline'];

}
