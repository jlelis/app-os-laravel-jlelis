<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'registry_id',
        'equipment_type_id',
        'brand_id',
        'serial_number',
        'description',
    ];
}
