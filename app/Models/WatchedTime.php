<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WatchedTime extends Model
{
   protected $table = 'watched_time';
   public $timestamps = false;


   public function user()
   {
      return $this->belongsTo(User::class);
   }

   public function channel()
   {
      return $this->belongsTo(User::class);
   }
}
