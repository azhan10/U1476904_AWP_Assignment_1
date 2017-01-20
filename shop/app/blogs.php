<?php

/**
* The model is used to access the database table which matches to the name of this model.
* The model will be used to perform interaction to this table
*/

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    public $fillable = ['name','description'];
}
