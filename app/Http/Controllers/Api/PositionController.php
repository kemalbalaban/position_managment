<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Position;

class PositionController extends Controller
{
    protected $positionRepository;

    public function __construct(PositionRepositoryInterface $positionRepository)
    {
        $this->positionRepository = $positionRepository;
    }

    public function index()
    {
        $positions = $this->positionRepository->all();
        return response()->json($positions);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $position = $this->positionRepository->create($data);
        return response()->json($position, 201);
    }

}
