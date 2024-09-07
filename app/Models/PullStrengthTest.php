<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PullStrengthTest extends Model
{
    use HasFactory;

    protected $table = 'pullstrengthtest';

    protected $fillable = [
        'date',
        'station',
        'model',
        'lot',
        'shift',
        'line',
        'start_time',
        'end_time',
        'deskcription',
        'name'
    ];
}
