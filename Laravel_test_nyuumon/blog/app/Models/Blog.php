<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    const CLOSED = 0;
    const OPEN = 1;

    protected $guarded = []; 

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function scopeOnlyOpen($query)
    {
        // return $query;
        return $query->where('status', self::OPEN);
    }

    public function isClosed()
    {
        return $this->status == self::CLOSED;
    }
}
