<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index()
    {
        $designation = Designation::orderBy('id','DESC')->paginate($this->count);
        $data = [
            'designation'    => $designation,
        ];
        return view('admin.designation', $data);
    }
}
