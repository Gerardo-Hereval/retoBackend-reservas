<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    protected $table='reservation';
    protected $fillable = [
        'id_activity',
        'ocupantes',
        'reservacion_ini',
        'reservacion_fin',
    ];

}
