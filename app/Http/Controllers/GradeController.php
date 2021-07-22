<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Grade;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grade = Grade::orderBy('id','DESC')->paginate($this->count);
        $menu = MenuItem::where('parent','0')->with('subMenu')->get();
        $departments = Department::all();
        $title = "Employee Grade";

        return view('admin.grade',compact('menu','departments','grade','title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'grade' => 'required'
        ]);

        $exist = Grade::where('grade',$request->grade)->first();

        if($exist)
            return redirect(
                route('grade.list.admin')
            )->with('error', 'Grade already exists !');

        $data       = $request->all();
        $grade      = new Grade($data);
        $grade->save();

        return redirect(
            route('grade.list.admin')
        )->with('success', 'Grade was added successfully!');
    }
}
