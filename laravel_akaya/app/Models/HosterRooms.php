<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HosterRooms extends Model  {



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'hoster_rooms';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['hoster_nome', 'hoster_contacto', 'hoster_alt_contacto', 'hoster_email', 'hoster_homes', 'hoster_points', 'created_at', 'updated_at', 'users_id'];

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
