<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $division = Division::orderBy('id','DESC')->paginate($this->count);
        $data = [
            'division'    => $division,
        ];
        return view('admin.division', $data);
    }
}
