<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index()
    {
        $designation = Designation::orderBy('id','DESC')->paginate($this->count);
        $menu = MenuItem::where('parent','0')->with('subMenu')->get();
        $departments = Department::all();
        $title = "Company Designations";

        return view('admin.designation',compact('menu','departments','designation','title'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'designation' => 'required'
        ]);

        $exist = Designation::where('designation',$request->designation)->first();

        if($exist)
            return redirect(
                route('designation.list.admin')
            )->with('error', 'Designation already exists !');

        $data               = $request->all();
        $designation         = new Designation($data);
        $designation->save();

        return redirect(
            route('designation.list.admin')
        )->with('success', 'Designation was added successfully!');
    }
}
