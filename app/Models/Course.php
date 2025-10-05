<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getImageAttribute($value)
    {
        return "https://picsum.photos/seed/course-{$this->id}/1280/720";
    }

    
    public function getExcerptAttribute()
    {
        return substr($this->description, 0, 80) . "...";
    }
}
