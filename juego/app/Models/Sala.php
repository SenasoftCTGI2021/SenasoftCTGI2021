<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sala
 *
 * @property $id
 * @property $codigo_sala
 * @property $salaidtipo
 * @property $salaidjugador
 * @property $created_at
 * @property $updated_at
 *
 * @property Jugadore $jugadore
 * @property TipoSala $tipoSala
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sala extends Model
{
    
    static $rules = [
		'codigo_sala' => 'required',
		'salaidtipo' => 'required',
		'salaidjugador' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo_sala','salaidtipo','salaidjugador'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function jugadore()
    {
        return $this->hasOne('App\Models\Jugadore', 'id', 'salaidjugador');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoSala()
    {
        return $this->hasOne('App\Models\TipoSala', 'id', 'salaidtipo');
    }
    

}
