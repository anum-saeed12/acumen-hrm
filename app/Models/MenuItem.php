<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $table = "menu_items";

    public function subMenu()
    {
        return $this->hasMany(self::class, 'parent');
    }
}
