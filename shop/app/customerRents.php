<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customerRents extends Model
{
    //
    public $fillable = ['id','filmtitle', 'duration', 'film_id', 'customer_name', 'customer_Address', 'status'];

}
