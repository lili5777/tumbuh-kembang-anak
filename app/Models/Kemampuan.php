<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kemampuan extends Model
{
    use HasFactory;
    protected $fillable = [
        'usia_id',
        'status',
        'keterangan',
    ];
}
