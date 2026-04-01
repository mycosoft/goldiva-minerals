<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageVisit extends Model
{
    public $timestamps = false;

    protected $fillable = ['page', 'ip_address', 'user_agent', 'user_id', 'visited_at'];
}
