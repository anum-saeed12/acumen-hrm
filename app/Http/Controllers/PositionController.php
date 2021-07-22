<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use App\Models\MenuItem;
use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {
        $position = Position::with('designation')
                             ->paginate($this->count);
        $menu = MenuItem::where('parent','0')->with('subMenu')->get();
        $departments = Department::all();
        $designations = Designation::all();
        $title = "All Positions";

        return view('admin.position',compact('menu','departments','position','title','designations'));
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
