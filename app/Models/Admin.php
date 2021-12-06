<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Admin
 *
 * @property $id
 * @property $correo
 * @property $nombre
 * @property $cedula
 * @property $Password
 * @property $Fecha_naci
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Admin extends Model
{
    
    static $rules = [
		'correo' => 'required | unique:admins',
		'nombre' => 'required',
		'cedula' => 'required | unique:admins',
		'Password' => 'required',
		'Fecha_naci' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */

    protected $hidden = [
      'Password',
  ];

    protected $table = "admins";
    protected $fillable = ['correo','nombre','cedula','Password','Fecha_naci'];



}
