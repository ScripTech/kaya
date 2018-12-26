<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provincias extends Model  {



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'provincias';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'created_at', 'updated_at', 'status', 'pais_id'];

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
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

}
