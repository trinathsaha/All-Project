<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['category_id','video_title','video_short_description','video','publication_status'];
}
