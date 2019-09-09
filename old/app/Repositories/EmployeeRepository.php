<?php

namespace App\Repositories;

use App\Models\Employee;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EmployeeRepository
 * @package App\Repositories
 * @version June 18, 2019, 4:01 pm UTC
 *
 * @method Employee findWithoutFail($id, $columns = ['*'])
 * @method Employee find($id, $columns = ['*'])
 * @method Employee first($columns = ['*'])
*/
class EmployeeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'employee_id',
        'lastname',
        'firstname'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Employee::class;
    }
}
