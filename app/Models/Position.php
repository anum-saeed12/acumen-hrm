<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "position";
    protected $fillable = ['position_code','designation_id'];

    public function designation()
    {
        return $this->hasOne(Designation::class, 'id', 'designation_id');
    }
}
