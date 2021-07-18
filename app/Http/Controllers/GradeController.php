<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grade = Grade::orderBy('id','DESC')->paginate($this->count);
        $data = [
            'grade'    => $grade,
        ];
        return view('admin.grade', $data);
    }
}
