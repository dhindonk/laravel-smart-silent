<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuzzerControl extends Model
{
    /** @use HasFactory<\Database\Factories\BuzzerControlFactory> */
    use HasFactory;

    // 
    protected $fillable = ['status'];
    
    protected $table = 'buzzer_controls';

    protected $casts = [
        'status' => 'boolean'
    ];
}
