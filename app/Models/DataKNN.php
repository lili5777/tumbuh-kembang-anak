<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKNN extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'usia_id',
        'gender',
        'tb',
        'bb',
        'lk',
        'motorik_id',
        'bicara_id',
        'kategori'
    ];

    public function usia()
    {
        return $this->belongsTo(Usia::class, 'usia_id');
    }
}
