<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;
    protected $fillable = [
        'flat_no', 'floor_no', 'total_cost', 'paid_amount', 'pending_amount', 'email', 'phone_no', 'name'
    ];
}
