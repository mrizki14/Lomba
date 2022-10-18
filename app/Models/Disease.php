<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'kualifikasi', 'nama_medis', 'tingkat_bahaya', 'pengertian', 'penjelasan', 'penyebab', 'obat', 'saran_hospital', 'image_path', 'hospital_id',
    ];
}
