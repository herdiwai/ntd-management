<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessPDhourlyOutput extends Model
{
    use HasFactory;

    protected $table = 'process_pdhourlyoutput';

    protected $fillable = [
        'process',
        'shift',
        'lot',
        'line',
        'model'
    ];

    public function pdhourlyoutput() 
    {
        return $this->hasMany(PDHourlyOutput::class);
    }

}
