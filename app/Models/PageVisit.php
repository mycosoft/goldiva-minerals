<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PageVisit extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'page',
        'ip_address',
        'user_agent',
        'user_id',
        'visited_at',
        'country',
        'city',
        'device',
        'browser',
        'os',
        'referer',
    ];

    protected $casts = [
        'visited_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
