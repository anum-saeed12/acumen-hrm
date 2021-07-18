<?php

namespace App\Http\Controllers;

use App\Models\CompanyFunction;
use Illuminate\Http\Request;

class FunctionController extends Controller
{
    public function index()
    {
        $function = CompanyFunction::orderBy('id','DESC')->paginate($this->count);
        $data = [
            'function'    => $function,
        ];
        return view('admin.function', $data);
    }
}
