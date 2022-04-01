<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_tugas extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama_tugas',
        'berkas_tugas'
    ];

    protected $casts = [
        'waktu' => 'datetime',
    ];
}
