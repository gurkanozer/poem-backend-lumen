<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'title', 'is_active'
    ];
    public function poems()
    {
        return $this->hasMany(Poem::class)->orderBy('created_at', 'DESC');
    }
}
