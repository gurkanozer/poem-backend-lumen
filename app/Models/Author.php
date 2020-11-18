<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name','is_active'
    ];
    public function poems()
    {
        return $this->hasMany(Poem::class)->orderBy('created_at', 'DESC');
    }
}
