<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MateriasTabla
 *
 * @property $id
 * @property $creditos
 * @property $nombre
 * @property $profesor
 * @property $turno
 * @property $disponible
 *
 * @property PivoteTabla[] $pivoteTablas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MateriasTabla extends Model
{
    
    static $rules = [
		'creditos' => 'required',
		'nombre' => 'required',
		'profesor' => 'required',
		'turno' => 'required',
		'disponible' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['creditos','nombre','profesor','turno','disponible'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pivoteTablas()
    {
        return $this->hasMany('App\Models\PivoteTabla', 'materia_id', 'id');
    }
    

}
