<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class InventoryHistory
 * @package App\Models
 * @version June 18, 2019, 4:04 pm UTC
 *
 * @property string issue_date
 * @property string employee_id
 * @property string equipment_id
 * @property string project_id
 * @property string situation_id
 * @property string projectTo_id
 * @property string approvedby
 * @property string remarks
 * @property string user_id
 */
class InventoryHistory extends Model
{
    use SoftDeletes;

    public $table = 'inventory_histories';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'issue_date',
        'employee_id',
        'equipment_id',
        'project_id',
        'situation_id',
        'projectTo_id',
        'approvedby',
        'remarks',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'issue_date' => 'date',
        'employee_id' => 'string',
        'equipment_id' => 'string',
        'project_id' => 'string',
        'situation_id' => 'string',
        'projectTo_id' => 'string',
        'approvedby' => 'string',
        'remarks' => 'string',
        'user_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'issue_date' => 'required',
        'employee_id' => 'required',
        'equipment_id' => 'required',
        'project_id' => 'required',
        'situation_id' => 'required',
        'projectTo_id' => 'required',
        'approvedby' => 'required',
        'remarks' => 'required',
        'user_id' => 'required'
    ];

    
}
