<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
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

    // static public function filter($request) 
    // {
    //     $start_date = ['$request->start_date'];
    //     $end_date = ['$request->end_date'];
    //     // $start_date = date('d-m-Y H:i A', '[$request->created_at]');
    //     // $end_date = date('d-m-Y H:i A', '[$request->created_at]');

    //     $data = PDHourlyOutput::whereDate('created_at','>=', $start_date)
    //                         ->whereDate('created_at','<=', $end_date)
    //                         ->get();
    //     // $data->whereBetween($key, [$start_date,$end_date ]);
    //     return view('layout.pdhourlyoutput.index',compact('data'));
    // }

}
