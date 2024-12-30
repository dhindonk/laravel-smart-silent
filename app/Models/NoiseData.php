<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoiseData extends Model
{
    /** @use HasFactory<\Database\Factories\NoiseDataFactory> */
    use HasFactory;

    protected $table = 'noise_data';
    protected $fillable = ['noise_level'];
}
