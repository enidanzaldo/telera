<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
   use HasFactory;
   protected $table = 'tb_alumnos';
   protected $primarykey = 'id_alumnos';
   protected $fillable =[
       
        'nombre',
        'fn',
        'genero',
        'matricula',
        'direccion',
        'email',
        'password',
        'foto',

        
   ];

    }

    

