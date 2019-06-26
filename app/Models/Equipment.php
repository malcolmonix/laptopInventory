<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Equipment
 * @package App\Models
 * @version June 18, 2019, 4:02 pm UTC
 *
 * @property string name
 * @property string model
 * @property string serialnumber
 * @property string equipment_type_id
 * @property string status
 */
class Equipment extends Model
{
    use SoftDeletes;

    public $table = 'equipments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'model',
        'serialnumber',
        'equipment_type_id',
        'situation_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'model' => 'string',
        'serialnumber' => 'string',
        'equipment_type_id' => 'string',
        'situation_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'model' => 'required',
        'serialnumber' => 'required',
        'equipment_type_id' => 'required'
    ];

    
     //an equipment can only belong to a type
     public function equipment_type() {
        return $this->belongsTo('App\Models\EquipmentType');
    }

    //an equipment can only belong to a status
     public function situation() {
        return $this->belongsTo('App\Models\Situation');
    }
     
    public function inventoryHistory(){
        return $this->hasMany('App\Models\InventoryHistory');
    }
    //  //a booking can has one room
    //  public function room() {
    //     return $this->hasOne('App\Models\Room');
    // }
    
}
