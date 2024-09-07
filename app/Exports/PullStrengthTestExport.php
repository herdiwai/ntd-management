<?php

// namespace App\Exports;

// use App\Models\PullStrengthTest;
// use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\FromView;
// use Illuminate\Contracts\View\View;

// class PullStrengthTestExport implements FromView
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function view():View
//     {
//         // return PullStrengthTest::all();
//         $data = PullStrengthTest::all();
//         return view('layout.pullstrenghttest.table', ['data' => $data]);
//     }
// }

namespace App\Exports;

use App\Models\PullStrengthTest;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;


class PullStrengthTestExport implements FromCollection, WithHeadings, WithMapping
{
    protected $startDate;
    protected $endDate;

    public function __construct($startDate,$endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }



    public function collection()
    {
        return PullStrengthTest::whereBetween('created_at', [$this->startDate, $this->endDate])->get();
    }

    public function map($PullStrengthTest): array
    {
        return [
            $PullStrengthTest->id,
            $PullStrengthTest->date,
            $PullStrengthTest->station,
            $PullStrengthTest->model,
            $PullStrengthTest->lot,
            $PullStrengthTest->shift,
            $PullStrengthTest->line,
            $PullStrengthTest->start_time,
            $PullStrengthTest->end_time,
            $PullStrengthTest->deskcription,
            $PullStrengthTest->name,
            //$PullStrengthTest->created_at->format('Y-m-d'),
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Date',
            'Station',
            'Model',
            'Lot',
            'Shift',
            'Line',
            'Start Time',
            'End Time',
            'Description',
            'Name',
            //'Created At',
        ];
    }
    
}


