<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'usia_id',
        'tb',
        'bb',
        'lk',
        'motorik_id',
        'bicara_id',
        'kategori'
    ];
}
