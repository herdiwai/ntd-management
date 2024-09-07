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



class ExportPDHourlyoutput implements FromCollection
{

    protected $request;
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
    public function collection()
    {
        return PDHourlyOutput::select('date','process','model','lot','shift','line','time','target','output','accm','deskription','name')->get();
        // $request = Request::all();
        // return PDHourlyOutput::filter($request);
    }
}
