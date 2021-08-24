<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "employees";
    protected $fillable = ['full_name','email','gender','date_of_birth','code',
                           'religion','employee_type','services_type'];
}
