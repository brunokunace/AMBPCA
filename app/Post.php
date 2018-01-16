<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Common\Model\Model;

class Post extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'image', 'content', 'category_id', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
