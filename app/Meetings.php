<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meetings extends Model
{
    protected $fillable = [
        'title', 'description', 'start', 'end' , 'allDay', 'className','user_id'
    ];
}
