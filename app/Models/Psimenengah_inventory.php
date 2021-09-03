<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Psimenengah_inventory extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'brand', 'name', 'category', 'quantity', 'description'
    ];

    protected $hidden = [];
}
