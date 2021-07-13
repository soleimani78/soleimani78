<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $appends = [ 'image_url', 'url' ];

    public function getUrlAttribute()
    {
        return route('blog', $this->id );
    }

    public function getImageUrlAttribute()
    {
        return url($this->image);
    }

    public function scopeOfTitle($query, $title)
    {
        if ( $title === null )
            return $query;
        return $query->where('title', 'like', '%' . $title . '%');
    }
}
