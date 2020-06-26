<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LectureImage extends Model
{
    protected $fillable = ['lecture_id', 'image_path'];
}
