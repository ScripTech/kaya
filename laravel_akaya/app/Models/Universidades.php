<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Provincias;
use App\Models\Distritos;
class Universidades extends Model  {



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'universidades';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'created_at', 'updated_at', 'status', 'provincias_id', 'distritos_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "updated_at" => "Y-m-d H:i:s",
        "created_at" => "Y-m-d H:i:s"
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    // Relacionamento de Tableas
    public function provincia(){
        return $this->hasOne(Provincias::class, 'id', 'provincias_id');
    }

    public function distrito(){
        return $this->hasOne(Distritos::class, 'id', 'distritos_id');
    }

}
