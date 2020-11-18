<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poem extends Model
{
    protected $fillable = [
        'author_id', 'title', 'content', 'genre_id', 'is_active'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
