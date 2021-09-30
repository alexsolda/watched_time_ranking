<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
   protected $table = 'channel';
   public $timestamps = false;

   public function watchedTime()
   {
      return $this->hasMany(WatchedTime::class);
   }
}
