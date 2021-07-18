<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {
        $position = Position::with('designation')
                             ->paginate($this->count);
        $data = [
            'position'    => $position,
        ];
        return view('admin.position', $data);
    }
}
