<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mascota
 *
 * @property $id
 * @property $nombre
 * @property $cedula
 * @property $Fecha_Naci
 * @property $Cedula_cliente
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mascota extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'cedula' => 'required | unique:mascotas',
		'Fecha_Naci' => 'required',
		'Cedula_cliente' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','cedula','Fecha_Naci','Cedula_cliente'];



}
