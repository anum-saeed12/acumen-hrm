<?php

namespace App\Http\Controllers;

use App\Models\CompanyFunction;
use App\Models\Department;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class FunctionController extends Controller
{
    public function index()
    {
        $function = CompanyFunction::orderBy('id','DESC')->paginate($this->count);
        $menu = MenuItem::where('parent','0')->with('subMenu')->get();
        $departments = Department::all();
        $title = "Employee Function";

        return view('admin.function',compact('menu','departments','function','title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'function' => 'required'
        ]);

        $exist = CompanyFunction::where('function',$request->function)->first();

        if($exist)
            return redirect(
                route('function.list.admin')
            )->with('error', 'Function already exists !');

        $data           = $request->all();
        $function       = new CompanyFunction($data);
        $function->save();

        return redirect(
            route('function.list.admin')
        )->with('success', 'Function was added successfully!');
    }
}
