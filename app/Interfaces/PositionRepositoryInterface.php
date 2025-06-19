<?php
namespace App\Interfaces;

interface PositionRepositoryInterface
{
    public function create(array $data);

    public function update(Position $position, array $data);

    public function delete(Position $position);

    public function findById($id);

    public function all();
}
