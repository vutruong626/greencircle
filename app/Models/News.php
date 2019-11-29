<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryNews;
class News extends Model
{
   
    public function category()
    {
        return $this->belongsTo(Voyager::modelClass('CategoryNews'));
    }
}
