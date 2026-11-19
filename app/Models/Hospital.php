<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    public const FACILITY_LEVELS = ['Hospital', 'Clinic / Health Center'];

    protected $guarded = [];
}
