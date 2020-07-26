<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = ['user_id', 'category_name', 'title', 'content', 'image', 'createc_at', 'updated_at'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function images() {
        return $this->hasMany(LectureImage::class);
    }
}