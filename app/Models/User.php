<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    public $timestamps = false;

    public function watchedTime()
    {
        return $this->hasMany(WatchedTime::class);
    }
}
