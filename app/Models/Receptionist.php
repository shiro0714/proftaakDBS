<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receptionist extends Model
{
    protected $primaryKey = 'idReceptionist';

    public function bezoekers()
    {
        return $this->hasMany(Bezoeker::class, 'idReceptionist');
    }
}
