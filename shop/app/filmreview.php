<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class filmreview extends Model
{
    //
    public $fillable = ['id','filmtitle', 'description', 'review', 'film_id'];
}
