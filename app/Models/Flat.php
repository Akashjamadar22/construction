<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    use HasFactory;
    protected $fillable = [
        'flat_no', 'floor_no', 'building_material', 'from', 'unit_no', 'total_expenses'
    ];
}
