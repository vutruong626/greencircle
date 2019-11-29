<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use App\Models\News;

class CategoryNews extends Model
{
    use Translatable;
    protected $translatable = ['slug', 'name'];
    protected $table = 'category_news';
    protected $fillable = ['slug', 'name'];
    public function news() 
    {
        return $this->hasMany(Voyager::modelClass('News'))
            ->published()
            ->orderBy('created_at', 'DESC');
    }
    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
}
