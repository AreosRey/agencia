<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Solicitud extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'Solicitud';
    protected $primaryKey = "_id";

    protected $fillable = [
        'fecha_solicitud',
        'cliente_id',
        'servicio_id',
        'ubicacion_servicio',
        'duracion_servicio',

    ];
public function cliente()
{
    return $this->belongsTo(User::class, 'cliente_id');
}

public function servicio()
{
    return $this->belongsTo(Servicio::class);
}

}