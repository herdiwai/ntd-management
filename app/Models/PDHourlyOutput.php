<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Process;

class PDHourlyOutput extends Model
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
        'deskription',
        'line',
        'model'
    ];

    public function proceespdhourlyoutput() 
    {
        return $this->belongsTo(ProcessPDhourlyOutput::class);
    }

}
