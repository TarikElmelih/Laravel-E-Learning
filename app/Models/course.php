<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class course extends Model
{
    use HasFactory;


    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function Videos(): HasMany
    {
        return $this->hasMany(course_video::class, 'course_id', 'id');
    }

    public function comment()
    {
        return $this->hasMany(comment::class, 'course_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany(course::class, 'course_user', 'course_id', 'user_id');
    }
}
