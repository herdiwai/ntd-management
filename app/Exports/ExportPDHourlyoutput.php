<?php

namespace App\Exports;

use App\Models\PDHourlyOutput;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportPDHourlyoutput implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        $data = PDHourlyOutput::all();
        return view('layout.pdhourlyoutput.table', ['data' => $data]);
    }
}
