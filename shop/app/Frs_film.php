<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frs_film extends Model
{
    //

    public $fillable = ['filmtitle','filmdescription', 'filmdirector', 'filmrating', 'filmstarname'];
}
