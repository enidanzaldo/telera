<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    use HasFactory;
    protected $table = 'tb_grupo';
    protected $prymarykey = 'id_grupo';
    protected $fillable = [
        'clave',
        'nombre',
    ];

}
