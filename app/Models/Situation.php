<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Situation
 * @package App\Models
 * @version June 18, 2019, 4:04 pm UTC
 *
 * @property string name
 */
class Situation extends Model
{
    use SoftDeletes;

    public $table = 'situations';
    
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

     //situation type hasMany equipments
     public function equipment() {
        return $this->hasMany('App\Models\Equipment');
    }

    public function inventoryhistory(){
        return $this->hasMany('App\Models\InventoryHistory');
    }
}
