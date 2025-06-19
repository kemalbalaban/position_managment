<?php
namespace App\Repositories;

use App\Models\Position;
use App\Interfaces\PositionRepositoryInterface;

class PositionRepository implements PositionRepositoryInterface
{
    protected $positionModel;

    public function __construct(Position $model)
    {
        $this->positionModel = $model;
    }

    public function create(array $data)
    {
        return $this->positionModel->create($data);
    }

    public function update(Position $position, array $data)
    {
        return $position->update($data);
    }

    public function delete(Position $position)
    {
        return $position->delete();
    }

    public function findById($id)
    {
        return $this->positionModel->findOrFail($id);
    }

    public function all()
    {
        return $this->positionModel->all();
    }
}
