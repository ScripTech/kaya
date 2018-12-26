<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomsInfo extends Model  {



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rooms_info';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['desc', 'type', 'owner', 'created_at', 'updated_at', 'rooms_id'];

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
