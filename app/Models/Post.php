<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'imagen',
        'descripcion',
        'precio'
    ];

    /* Mandamos a llamar la tabla de nuestra base de datos */
    use Notifiable;
    protected $table='posts';
}
