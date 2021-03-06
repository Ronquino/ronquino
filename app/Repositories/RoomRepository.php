<?php

namespace App\Repositories;

use App\Models\Room;
use App\Repositories\BaseRepository;

/**
 * Class RoomRepository
 * @package App\Repositories
 * @version September 17, 2021, 1:40 pm UTC
*/

class RoomRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'roomNumber',
        'roomName',
        'yourName',
        'yourAddress',
        'Date'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Room::class;
    }
}
