<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservaRoomHasUsers extends Model  {



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reserva_room_has_users';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['reserva_room_id', 'users_id', 'created_at', 'updated_at'];

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
