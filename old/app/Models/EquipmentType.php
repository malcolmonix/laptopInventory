<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EquipmentType
 * @package App\Models
 * @version June 18, 2019, 4:03 pm UTC
 *
 * @property string name
 */
class EquipmentType extends Model
{
    use SoftDeletes;

    public $table = 'equipment_types';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
     //equipment type hasMany equipments
     public function equipment() {
        return $this->hasMany('App\Models\Equipment');
    }

    //  //a booking can has one room
    //  public function room() {
    //     return $this->hasOne('App\Models\Room');
    // }
}
