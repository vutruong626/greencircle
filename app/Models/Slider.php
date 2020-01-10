<?php

namespace App\Models;

use TCG\Voyager\Facades\Voyager;
use App\Models\AbstractModel;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $translatable = ['excerpt'];

    protected $fillable = ['image', 'link', 'active'];

    const ACTIVE = 1;
    const INACTIVE = 0;

    public static $statuses = [self::ACTIVE, self::INACTIVE];

    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('active', self::ACTIVE);
    }

    public function defaultThumb()
    {
        return asset('/assets/frontend/images/default.jpg');
    }

    public function imageDefault($img) {
        if($img) {
           return asset(voyager::image($img));
        }else {
            return asset('/assets/frontend/images/slide_default.jpg');
        }
    }
}
