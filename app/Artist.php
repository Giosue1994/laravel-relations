<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
      'name',
      'year',
      'biography',
    ];

    public function albums() {
      return $this->belongsToMany('App\Album');
    }
}
