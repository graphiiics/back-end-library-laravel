<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'author', 'published_date', 'status', 'category_id', 'user_id'];
    //
    public function category()
    {
    	return $this->belongsTo('App\Models\Category');
    }

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}
