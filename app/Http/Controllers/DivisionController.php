<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Division;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $division = Division::orderBy('id','DESC')->paginate($this->count);
        $menu = MenuItem::where('parent','0')->with('subMenu')->get();
        $departments = Department::all();
        $title = "Employee Division";

        return view('admin.division',compact('menu','departments','division','title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'division' => 'required'
        ]);

        $exist = Division::where('division',$request->division)->first();

        if($exist)
            return redirect(
                route('division.list.admin')
            )->with('error', 'Division already exists !');

        $data               = $request->all();
        $division        = new Division($data);
        $division->save();

        return redirect(
            route('division.list.admin')
        )->with('success', 'Division was added successfully!');
    }
}
