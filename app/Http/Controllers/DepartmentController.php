<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $department = Department::orderBy('id','DESC')->paginate($this->count);
        $menu = MenuItem::where('parent','0')->with('subMenu')->get();
        $departments = Department::all();
        $title = "Company Departments";

        return view('admin.department.department', compact('menu','departments','department','title'));

    }
    public function add()
    {
        $data = [
            'title'    => 'Company Departments',
        ];
        return view('admin.department', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'department' => 'required',
            'location'   => 'required'
        ]);

        $exist = Department::where('department',$request->department)->where('location',$request->location)->first();

        if($exist)
            return redirect(
                route('department.list.admin')
            )->with('error', 'Department already exists !');

        $data               = $request->all();
        $department         = new Department($data);
        $department->save();

        return redirect(
            route('department.list.admin')
        )->with('success', 'Department was added successfully!');
    }

}
