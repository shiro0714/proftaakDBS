<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Bezoeker extends Model
{
    // Vertel Laravel wat de Primary Key is (omdat het geen 'id' heet)
    protected $primaryKey = 'idBezoeker';

    public function receptionist()
    {
        return $this->belongsTo(Receptionist::class, 'idReceptionist');
    }

    public function pas()
    {
        return $this->belongsTo(Bezoekerspas::class, 'idBezoekerspas');
    }
}
   
