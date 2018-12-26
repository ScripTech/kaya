<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model  {



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rooms';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['r_nome', 'r_desc', 'r_info', 'r_foto-1', 'r_foto-2', 'r_foto-3', 'r_foto-4', 'r_foto-5', 'r_price', 'r_shared', 'r_status', 'users_id', 'room_type_id', 'hoster_rooms_id', 'created_at', 'updated_at'];

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
