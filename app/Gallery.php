<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Common\Model\Model;

class Gallery extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url'
    ];
}
