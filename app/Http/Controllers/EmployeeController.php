<?php

namespace App\Http\Controllers;

use App\Models\CompanyFunction;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Division;
use App\Models\Employee;
use App\Models\Grade;
use App\Models\MenuItem;
use App\Models\Position;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
    }
    public function add()
    {
        $menu = MenuItem::where('parent','0')->with('subMenu')->get();
        $departments = Department::all();
        $positions = Position::all();
        $designations = Designation::all();
        $grades = Grade::all();
        $divisions = Division::all();
        $functions = CompanyFunction::all();
        $employees = Employee::all();

        $data = [
            'title'       => 'Add Employee',
            'menu'        => $menu,
            'departments' => $departments,
            'positions'   => $positions,
            'desig'       => $designations,
            'grades'      => $grades,
            'divisions'   => $divisions,
            'functions'   => $functions,
            'employees'   => $employees


        ];
        return view('admin.employee.add', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'position_code' => 'required',
            'designation_id'=> 'required'
        ]);

        $exist = Position::where('position_code',$request->position_code)->where('designation_id',$request->designation_id)->first();

        if($exist)
            return redirect(
                route('position.list.admin')
            )->with('error', 'Position Code already exists !');

        $data               = $request->all();
        $position        = new Position($data);
        $position->save();

        return redirect(
            route('position.list.admin')
        )->with('success', 'Position Code was added successfully!');
    }
}
