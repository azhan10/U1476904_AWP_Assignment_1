<?php

/**
* The model is used to access the database table which matches to the name of this model.
* The model will be used to perform interaction to this table
*/

namespace App;

use Illuminate\Database\Eloquent\Model;

class filmreview extends Model
{
    public $fillable = ['id','filmtitle', 'description', 'review', 'film_id'];
}
