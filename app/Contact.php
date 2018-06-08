<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    // primaryKey
    public $primaryKey = 'id';
    // timestamps

    public $timestamps = true;
}
