<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Grade;
use App\Models\MenuItem;
use App\Models\Position;
use Illuminate\Http\Request;
use Monarobase\CountryList\CountryList;
use Monarobase\CountryList\CountryListFacade;

class CompanyController extends Controller
{
    public function policy()
    {
        $grade = Grade::orderBy('id','DESC')->paginate($this->count);
        $menu = MenuItem::where('parent','0')->with('subMenu')->get();
        $departments = Department::all();
        $positions = Position::all();
        $title = "Company Policy";

        return view('admin.company.company-policy',compact('menu','departments','grade','title','positions'));
    }
    public function add()
    {
        $grade = Grade::orderBy('id','DESC')->paginate($this->count);
        $menu = MenuItem::where('parent','0')->with('subMenu')->get();
        $departments = Department::all();
        $positions = Position::all();
        $title = "Company Details";

        return view('admin.company.company-details',compact('menu','departments','grade','title','positions'));

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
