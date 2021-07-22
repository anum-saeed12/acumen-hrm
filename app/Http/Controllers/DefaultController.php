<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function dashboard()
    {
        $menu = MenuItem::where('parent','0')->with('subMenu')->get();
        $departments = Department::all();

        return view('admin.dashboard', compact('menu','departments'));
    }
}
