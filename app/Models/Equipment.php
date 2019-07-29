<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Equipment
 * @package App\Models
 * @version July 26, 2019, 10:44 am UTC
 *
 * @property string name
 * @property string model
 * @property integer brand_id
 * @property string serialnumber
 * @property integer equipment_type_id
 * @property integer situation_id
 * @property string status
 * @property integer user_id
 * @property string computer_name
 * @property string mac_address
 * @property string ip_address
 * @property string comment
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
        'brand_id',
        'serialnumber',
        'equipment_type_id',
        'situation_id',
        'status',
        'user_id',
        'computer_name',
        'mac_address',
        'ip_address',
        'comment'
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
        'brand_id' => 'integer',
        'serialnumber' => 'string',
        'equipment_type_id' => 'integer',
        'situation_id' => 'integer',
        'status' => 'string',
        'user_id' => 'integer',
        'computer_name' => 'string',
        'mac_address' => 'string',
        'ip_address' => 'string',
        'comment' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'brand_id' => 'required',
        'serialnumber' => 'required',
        'equipment_type_id' => 'required',
        'status' => 'required',
        'user_id' => 'required'
    ];

    public function brand(){
        return $this->hasOne('App\Models\Brand');
    }

    
}
