<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Common\Model\Model;

class ServiceWorkersWorker extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'service_workers_category_id'
    ];

    public function category()
    {
        return $this->belongsTo(ServiceWorkersCategory::class);
    }
}
