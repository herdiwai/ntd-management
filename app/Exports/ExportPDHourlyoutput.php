<?php

// namespace App\Exports;

// use App\Models\PDHourlyOutput;
// use Maatwebsite\Excel\Concerns\FromView;
// use Illuminate\Contracts\View\View;
// use Illuminate\Http\Request;

// class ExportPDHourlyoutput implements FromView
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function view():View
//     {
//         $data = PDHourlyOutput::all();
//         return view('layout.pdhourlyoutput.table', ['data' => $data]);
//     }
// }

namespace App\Exports;

use App\Models\PDHourlyOutput;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;



class ExportPDHourlyOutput implements FromCollection, WithHeadings
{
    protected $lot;
    protected $shift;
    protected $line;
    protected $model;
    protected $startDate;
    protected $endDate;
   

    public function __construct($lot, $shift, $line, $model,$startDate, $endDate)
    {
        $this->lot = $lot;
        $this->shift = $shift;
        $this->line = $line;
        $this->model = $model;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
       

    }


    public function collection()
    {
        //return PDHourlyOutput::whereBetween('created_at', [$this->startDate, $this->endDate])->get();
        return PDHourlyOutput::when($this->lot, function($query) {
            return $query->where('lot', $this->lot);
        })
        ->when($this->shift, function($query) {
            return $query->where('shift', $this->shift);
        })
        ->when($this->line, function($query) {
            return $query->where('line', $this->line);
        })
        ->when($this->model, function($query) {
            return $query->where('model', $this->model);
        })
        ->when($this->startDate, function($query) {
            return $query->whereDate('created_at', '>=', $this->startDate);
        })
        ->when($this->endDate, function($query) {
            return $query->whereDate('created_at', '<=', $this->endDate);
        })
        ->get();


        // return PDHourlyOutput::when($this->startDate, function ($query) {
        //     return $query->whereDate('created_at', '>=', $this->startDate);
        // })
        // ->when($this->endDate, function ($query) {
        //     return $query->whereDate('created_at', '<=', $this->endDate);
        // })

        // ->get();
    }

    // public function map($PDHourlyOutput): array
    // {
    //     return [
            
    //         $PDHourlyOutput->date,
    //         $PDHourlyOutput->process,
    //         $PDHourlyOutput->model,
    //         $PDHourlyOutput->lot,
    //         $PDHourlyOutput->shift,
    //         $PDHourlyOutput->line,
    //         $PDHourlyOutput->time,
    //         $PDHourlyOutput->target,
    //         $PDHourlyOutput->output,
    //         $PDHourlyOutput->accm,
    //         $PDHourlyOutput->deskription,
    //         $PDHourlyOutput->name,
    //         //$PullStrengthTest->created_at->format('Y-m-d'),
    //     ];
    // }

    public function headings(): array
    {
        return [
            'Id',
            'Name',
            'Time',
            'Target',
            'Output',
            'Accm',
            'Date',
            'Process',
            'Shift',
            'Lot',
            'Deskcription',
            'Create At',
            'Update At',
            'Process PDHourly ID',
            'Line',
            'Model',
            
            //'Created At',
        ];
    }
    //protected $request;
    // public function headings(): array
    // {
    //     return [
    //         'Date',
    //         'Process',
    //         'Model',
    //         'Lot',
    //         'Shift',
    //         'Line',
    //         'Time',
    //         'Target',
    //         'Output',
    //         'Accm',
    //         'Deskcription',
    //         'PIC',
    //     ];
    // }
    //public function collection()
    //{
       // return PDHourlyOutput::select('date','process','model','lot','shift','line','time','target','output','accm','deskription','name')->get();
        // $request = Request::all();
        // return PDHourlyOutput::filter($request);
    //}
}
