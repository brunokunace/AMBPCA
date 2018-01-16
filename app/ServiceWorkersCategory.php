<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Common\Model\Model;

class ServiceWorkersCategory extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function workers()
    {
        return $this->hasMany(ServiceWorkersWorker::class);
    }
}
