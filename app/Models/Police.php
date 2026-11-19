<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Police extends Model
{
    use HasFactory;

    public const CATEGORIES = ['National Police HQ', 'Local Police Facility'];

    protected $guarded = [];
}
