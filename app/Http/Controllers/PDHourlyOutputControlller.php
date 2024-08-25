<?php

namespace App\Http\Controllers;

use App\Models\PDHourlyOutPut;
use Illuminate\Http\Request;
use Mpdf\Mpdf;
use Validator;
use Redirect;

class PDHourlyOutputControlller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $PDHourlyOutput = PDHourlyOutput::all();
        // return view('layout.pdhourlyoutput.index', ['PDHourlyOutput' => $PDHourlyOutput]);

        // $PDHourlyOutput = PDHourlyOutput::get();
        // return view('layout.pdhourlyoutput.index', compact(['PDHourlyOutput']));
        $data = PDHourlyOutput::all();
        return view('layout.pdhourlyoutput.index', ['data' =>$data]);
    }

    public function filter(Request $request) 
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
        // $PDHO = PDHourlyOutput::get();
        // return view('page.pdhourlyoutput.create', compact(['PDHO']));
        return view('layout.pdhourlyoutput.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PDHourlyOutput::create($request->all());
        return Redirect::to('pdhourlyoutput')->with('success', 'Data successfully added !');

        // $request->validate([
        //     // 'time' => 'required|in:6.45-7.45,7.45-8.45',
        //     'time' => 'required',
        // ]);
        // $PDHO = PDHourlyOutput::find($id);
        // $PDHO->create([
        //     'name' => $request->name,
        //     'time' => $request->time,
        //     'target' => $request->target,
        //     'output' => $request->output,
        //     'accm' => $request->accm,
        //     'date' => $request->date,
        //     'process' => $request->process,
        //     'shift' => $request->shift,
        //     'lot' => $request->lot,
        //     'deskription' => $request->deskription,
        // ]);
        // return redirect('pdhourlyoutput.index')->with('success', 'Data successfully insert.');
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
        return view('layout.pdhourlyoutput.edit', ['data' =>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = array(
            'name'       => 'required',
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('pdhourlyoutput/' . $id . '/edit')
                ->withErrors($validator);
                // ->withInput($request->except('password'));
        } else {
            // store
            $data = PDHourlyOutput::find($id);

            $data->name = $request->get('name');
            $data->time = $request->get('time');
            $data->target = $request->get('target');
            $data->output = $request->get('output');
            $data->accm = $request->get('accm');
            $data->date = $request->get('date');
            $data->process = $request->get('process');
            $data->shift = $request->get('shift');
            $data->lot = $request->get('lot');
            $data->deskription = $request->get('deskription');
            $data->save();

            return Redirect::to('pdhourlyoutput')->with('success', 'Data successfully updated !');
            // redirect
            // Session::flash('message', 'Successfully updated PDHourlyOutput!');
           
            // return redirect()->back()->with('success', 'Data successfully added !');
        }

        // $request->validate([
        //     'name' => 'required'
        // ]);
        // $data = PDHourlyOutput::find($id);
        // $data->update([
        //     'name' => $request->name,
        //     'time' => $request->time,
        //     'target' => $request->target,
        //     'output' => $request->output,
        //     'aacm' => $request->aacm,
        //     'date' => $request->date,
        //     'process' => $request->process,
        //     'shift' => $request->shift,
        //     'lot' => $request->lot,
        //     'deskription' => $request->deskription
        // ]);
        // return redirect('pdhourlyoutput')->with('success', 'Data successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = PDHourlyOutput::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Data successfully deleted !');

        // // redirect
        // Session::flash('message', 'Successfully deleted the data!');
        // return Redirect::to('pdhourlyoutput');

    }
}
