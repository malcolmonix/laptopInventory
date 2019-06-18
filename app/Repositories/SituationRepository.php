<?php

namespace App\Repositories;

use App\Models\Situation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SituationRepository
 * @package App\Repositories
 * @version June 18, 2019, 4:04 pm UTC
 *
 * @method Situation findWithoutFail($id, $columns = ['*'])
 * @method Situation find($id, $columns = ['*'])
 * @method Situation first($columns = ['*'])
*/
class SituationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Situation::class;
    }
}
