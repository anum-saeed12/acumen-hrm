<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Grade;
use App\Models\MenuItem;
use App\Models\Position;
use Illuminate\Http\Request;
use Monarobase\CountryList\CountryList;
use Monarobase\CountryList\CountryListFacade;

class LeaveController extends Controller
{
    public function leaveapply()
    {
        $grade = Grade::orderBy('id','DESC')->paginate($this->count);
        $menu = MenuItem::where('parent','0')->with('subMenu')->get();
        $departments = Department::all();
        $positions = Position::all();
        $title = "Apply for Leave";

        return view('admin.leave.applyforleave',compact('menu','departments','grade','title','positions'));
    }
}
