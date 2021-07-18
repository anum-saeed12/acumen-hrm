<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyFunction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "function";
    protected $fillable = ['function'];
}
