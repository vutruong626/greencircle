<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;

class CompanyCategory extends Model
{
    use Translatable;

    protected $translatable = ['slug', 'name'];

    protected $table = 'company_categories';

    protected $fillable = ['slug', 'name'];

    public function company_activies()
    {
        return $this->hasMany(Voyager::modelClass('CompanyActivy'))
            ->published()
            ->orderBy('created_at', 'DESC');
    }

    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
}
