<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EstudiantesTabla
 *
 * @property $nombre
 * @property $codigo
 * @property $carrera
 * @property $creditos_cursados
 * @property $correo
 *
 * @property PivoteTabla[] $pivoteTablas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EstudiantesTabla extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'codigo' => 'required',
		'creditos_cursados' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','codigo','carrera','creditos_cursados','correo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pivoteTablas()
    {
        return $this->hasMany('App\Models\PivoteTabla', 'estudiante_id', 'codigo');
    }
    

}
