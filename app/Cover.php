<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cover extends Model
{
    protected $fillable = [
      'url',
      'album_id',
    ];

    public function albums() {
      return $this->belongsTo('App\Album');
    }
}
