<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Employee
 * @package App\Models
 * @version June 18, 2019, 4:01 pm UTC
 *
 * @property string employee_id
 * @property string lastname
 * @property string firstname
 */
class Employee extends Model
{
    use SoftDeletes;

    public $table = 'employees';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'employee_id',
        'lastname',
        'firstname'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'employee_id' => 'string',
        'lastname' => 'string',
        'firstname' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'employee_id' => 'required',
        'lastname' => 'required',
        'firstname' => 'required'
    ];

    
}
