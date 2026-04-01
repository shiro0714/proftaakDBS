<?php

namespace App\Models;

// Wijzig deze regel:
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// En laat de class dit "extenden":
class Receptionist extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'idReceptionist';
    
    // Zorg dat deze velden ingevuld mogen worden
    protected $fillable = ['naam', 'email', 'password'];
}