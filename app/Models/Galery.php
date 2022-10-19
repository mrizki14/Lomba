<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory;
    protected $table = 'galleries';
    protected $fillable = [
        'hospital_id', 'image_url',
    ];

    public function hospitals() {
        return $this->belongsTo(Hospital::class, 'id', 'hospital_id');
    }
}
