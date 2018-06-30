<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function feedback()
    {
        if($this->onoff=="online")
        return $this->hasMany('App\onlineFeedback')->where('id', $this->id);
        else
        return $this->hasMany('App\offlineFeedback')->where('id', $this->id);
    }
}
