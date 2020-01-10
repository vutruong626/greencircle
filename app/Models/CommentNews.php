<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class CommentNews extends Model
{
    use Translatable;

    protected $translatable = ['name','email'];

    protected $table = 'comment_news';

    protected $fillable = ['email', 'name'];

    public function comment_news()
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
