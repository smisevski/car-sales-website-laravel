<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';
    // primaryKey
    public $primaryKey = 'id';
    // timestamps

    public $timestamps = true;

    public function user()
    {
    	return $this->belongsTo('App\Post');
    }
}
