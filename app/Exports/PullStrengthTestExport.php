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

class PullStrengthTestExport implements FromCollection
{
    public function collection()
    {
        return PullStrengthTest::all();
    }
}


