<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerLevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_level_title',
        'description',
    ];
}
