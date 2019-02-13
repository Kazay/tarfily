<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    protected $table = 'voyages';

    protected $fillable = ['label', 'country', 'city', 'dateStart', 'dateEnd', 'price', 'availability', 'picture', 'description'];
}
