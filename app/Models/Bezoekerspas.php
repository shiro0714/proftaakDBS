<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bezoekerspas extends Model
{
    // Vertel Laravel wat de Primary Key is uit je diagram
    protected $primaryKey = 'idBezoekerspas';

    // Omdat de PK geen 'id' heet en waarschijnlijk niet automatisch ophoogt (of wel), 
    // is dit een goede gewoonte om te definiëren:
    public $incrementing = true;

    /**
     * Een pas is gekoppeld aan een bezoeker.
     */
    public function bezoeker()
    {
        // Omdat de Foreign Key (idBezoekerspas) in de tabel 'bezoekers' staat,
        // gebruiken we hier 'hasOne' of 'hasMany'.
        return $this->hasOne(Bezoeker::class, 'idBezoekerspas');
    }
}