<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Puesto extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'Puesto';
    protected $primaryKey = "_id";

    protected $fillable = [
        '_id',
        'user',
        'puesto',
    ];
public function usuarios()
{
    return $this->hasMany(User::class, 'user','_id');
}
}
