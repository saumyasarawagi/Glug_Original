<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class onlineFeedback extends Model
{
    public function event()
    {
    	return $this->belongsTo('App\Event');
    }
}
