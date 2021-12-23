<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;

    protected $table = 'Absens';
    protected $fillable = ['nis', 'nama', 'rombel' , 'rayon', 'pembimbing' , 'ket'];
}
