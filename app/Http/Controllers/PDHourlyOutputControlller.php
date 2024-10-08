<?php

namespace App\Http\Controllers;

use App\Exports\ExportPDHourlyoutput;
use App\Models\PDHourlyOutPut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Mpdf\Mpdf;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator as FacadesValidator;

// use Illuminate\View\View;

class PDHourlyOutputControlller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PDHourlyOutput::all();
        $shift = ['1st','2nd','3rd'];
        $lot = ['B','C','D','E'];
        $process = ['P1','P2','P3','P4','P5'];
        $line = ['1','2','3','4'];
        $model = ['KEE','KIE','K-SUPREME GSV','KCS','KSS','K-SLIM GSV','K90','K55'];
        return view('layout.pdhourlyoutput.index', compact('data','shift','lot','process','line','model'));
        
        
        $data = DB::table('pdhourlyoutput')->latest()->get();
        return view('layout.pdhourlyoutput.index', compact('data'));
        
    }

    public function exportToExcel(Request $request)
    {
        $lot = $request->input('lot');
        $shift = $request->input('shift');
        $line = $request->input('line');
        $model = $request->input('model');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        //return Excel::download(new ExportPDHourlyoutput($startDate, $endDate), "pdhourlyoutput.xlsx");
        //return Excel::download(new ExportPDHourlyoutput, "pdhourlyoutput.xlsx");

            // Validate the date inputs
            $request->validate([
                'start_date' => 'nullable|date',
                'end_date' => 'nullable|date|after_or_equal:start_date',
            ]);
    
            // Create file name based on the date range
            $fileName = 'data_export_' . now()->format('Ymd_His') . '.xlsx';
    
            // Return the Excel file
            return Excel::download(new ExportPDHourlyoutput($lot, $shift, $line, $model, $startDate, $endDate), $fileName);
        
    }

    static public function filter(Request $request) 
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $data = PDHourlyOutput::whereDate('created_at','>=', $start_date)
                            ->whereDate('created_at','<=', $end_date)
                            ->get();
        return view('layout.pdhourlyoutput.index', ['data' => $data]);
    }

    public function view_pdf()
    {
        // require_once __DIR__ . '/vendor/autoload.php';
        $mpdf = new \Mpdf\Mpdf();
        $data = PDHourlyOutput::all();
        $mpdf->WriteHTML(view('layout.pdhourlyoutput.index', ['data' => $data]));
        $mpdf->Output();
    }

    public function download_pdf()
    {
        // require_once __DIR__ . '/vendor/autoload.php';
        $mpdf = new \Mpdf\Mpdf();
        $data = PDHourlyOutput::all();
        $mpdf->WriteHTML(view('layout.pdhourlyoutput.index', ['data' => $data]));
        $mpdf->Output('download-pdf-pdhourlyoutput.pdf', 'D');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = PDHourlyOutput::all();
        $shift = ['1st','2nd','3rd'];
        $lot = ['B','C','D','E'];
        $process = ['P1','P2','P3','P4','P5'];
        $line = ['1','2','3','4'];
        $model = ['KEE','KIE','K-SUPREME GSV','KCS','KSS','K-SLIM GSV','K90','K55'];
        return view('layout.pdhourlyoutput.create', compact('data','shift','lot','process','line','model'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' =>'required|max:30',
            'time' =>'required',
            'target' =>'required',
            'output' =>'required',
            'accm' =>'required',
            'date' =>'required',
            'process' =>'required',
            'shift' =>'required',
            'lot' =>'required',
            'line' =>'required',
            'model' =>'required'
        ]);
     
        PDHourlyOutput::create($request->all());
        $notification = array(
            'message' => ' Data Added Succesfully',
            'alert-type' => 'success'
        );
        return Redirect::to('/pdhourlyoutput')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = PDHourlyOutput::find($id);
        $shift = ['1st','2nd','3rd'];
        $lot = ['B','C','D','E'];
        $process = ['P1','P2','P3','P4','P5'];
        $line = ['1','2','3','4'];
        $model = ['KEE','KIE','K-SUPREME GSV','KCS','KSS','K-SLIM GSV','K90','K55'];
        return view('layout.pdhourlyoutput.edit', compact('data','shift','lot','process','line','model'));
        // return view('layout.pdhourlyoutput.edit', ['data' =>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $data = PDHourlyOutput::find($id);
        $data->update([
            'name' => $request->name,
            'time' => $request->time,
            'target' => $request->target,
            'output' => $request->output,
            'aacm' => $request->aacm,
            'date' => $request->date,
            'process' => $request->process,
            'shift' => $request->shift,
            'lot' => $request->lot,
            'deskription' => $request->deskription,
            'line' => $request->line,
            'model' => $request->model
        ]);
        $notification = array(
            'message' => ' Data Change Succesfully',
            'alert-type' => 'success'
        );
        return redirect('pdhourlyoutput')->with($notification);

        // $pdid = $request->id;
        // PDHourlyOutPut::findOrFail($pdid)->update([
        //         'name' => $request->name,
        //         'time' => $request->time,
        //         'target' => $request->target,
        //         'output' => $request->output,
        //         'accm' => $request->accm,
        //         'date' => $request->date,
        //         'process' => $request->process,
        //         'shift' => $request->shift,
        //         'lot' => $request->lot,
        //         'deskription' => $request->deskription,
        //         'line' => $request->line,
        //         'model' => $request->model
        // ]);
        // $notification = array(
        //     'message' => ' Data Change Succesfully',
        //     'alert-type' => 'success'
        // );
        // return Redirect::to('/pdhourlyoutput')->with($notification);
    


        // $rules = array(
        //     'name' => 'required',
        // );
        // $validator = FacadesValidator::make($request->all(), $rules);

        // // process the login
        // if ($validator->fails()) {
        //     return Redirect::to('pdhourlyoutput/' . $id . '/edit')
        //         ->withErrors($validator);
        //         // ->withInput($request->except('password'));
        // } else {
        //     // store
        //     $data = PDHourlyOutput::find($id);

        //     $data->name = $request->get('name');
        //     $data->time = $request->get('time');
        //     $data->target = $request->get('target');
        //     $data->output = $request->get('output');
        //     $data->accm = $request->get('accm');
        //     $data->date = $request->get('date');
        //     $data->process = $request->get('process');
        //     $data->shift = $request->get('shift');
        //     $data->lot = $request->get('lot');
        //     $data->deskription = $request->get('deskription');
        //     $data->line = $request->get('line');
        //     $data->model = $request->get('model');
        //     $data->save();

        //     return Redirect::to('pdhourlyoutput')->with('updated', 'Data successfully updated !');
        //     redirect
        //     Session::flash('message', 'Successfully updated PDHourlyOutput!');
           
        //     return redirect()->back()->with('success', 'Data successfully added !');
        // }

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // DB::table('pdhourlyoutput')->where('id', $id)->delete();
        // PDHourlyOutPut::table('pdhourlyoutput')->where('id', $id)->delete();
        $data = PDHourlyOutput::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('success', 'Data successfully deleted !');

        // // redirect
        // Session::flash('message', 'Successfully deleted the data!');
        // return Redirect::to('pdhourlyoutput');

    }
}
