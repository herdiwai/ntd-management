<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HourlyOutputPD extends Model
{
    use HasFactory;

    protected $table = 'PDHourlyOutput';
    protected $fillable = [
        'name',
        'time',
        'target',
        'output',
        'accm',
        'date',
        'process',
        'shift',
        'lot',
        'deskription'
    ];
}
