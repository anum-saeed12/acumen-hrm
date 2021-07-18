<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $department = Department::orderBy('id','DESC')->paginate($this->count);
        $data = [
            'department'    => $department,
        ];
        return view('admin.department', $data);
    }
}
