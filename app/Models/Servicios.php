<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Servicios extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'Servicios';
    protected $primaryKey = "_id";

    protected $fillable = [
        'tip_serv',
        'descripcion_serv',
        'precio_serv',
        'duracion_serv',
    ];

public function Solicitud()
{
    return $this->hasMany(Solicitud::class);
}
    
}
