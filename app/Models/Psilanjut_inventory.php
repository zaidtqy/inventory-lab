<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Psilanjut_inventory extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'brand', 'name', 'category', 'quantity', 'description'
    ];

    protected $hidden = [];
}
