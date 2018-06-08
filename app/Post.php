<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // tbl_name
    protected $table = 'posts';
    // primaryKey
    public $primaryKey = 'id';
    // timestamps
    public $timestamps = true;

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

}
