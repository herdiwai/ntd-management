<?php

namespace App\Http\Controllers;

use App\Exports\PullStrengthTestExport;
use App\Models\PullStrengthTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

class PullStrengthTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function export(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        return Excel::download(new PullStrengthTestExport($startDate, $endDate), 'PullStrength.xlsx');

    }


    public function index()
    {
        $data = PullStrengthTest::latest()->get();
        return view('layout.pullstrenghttest.index', compact('data'));
    }

    public function filterpulstrength(Request $request) 
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $data = PullStrengthTest::whereDate('date','>=', $start_date)
                            ->whereDate('date','<=', $end_date)
                            ->get();
        return view('layout.pullstrenghttest.index', ['data' => $data]);
    }

    public function pullstrength_import_excel()
    {
        return view('layout.pullstrenghttest.import');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = PullStrengthTest::all();
        $shift = ['1st','2nd','3rd'];
        $lot = ['B','C','D','E'];
        $station = ['P1','P2','P3','P4','P5'];
        $line = ['1','2','3','4'];
        $model = ['KEE','KIE','K-SUPREME GSV','KCS','KSS','K-SLIM GSV','K90','K55'];
        return view('layout.pullstrenghttest.create', compact('data','shift','lot','station','line','model'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'date' =>'required',
            'station' =>'required',
            'model' =>'required',
            'lot' =>'required',
            'shift' =>'required',
            'line' =>'required',
            'start_time' =>'required',
            'end_time' =>'required',
            'name' =>'required',
        ]);
        $notification = array(
            'message' => ' Data Added Succesfully',
            'alert-type' => 'success'
        );
        // dd($request->all());
        PullStrengthTest::create($request->all());
        return Redirect::to('/pullstrengthtest')->with($notification);
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
        $data = PullStrengthTest::findOrFail($id);
        $shift = ['1st','2nd','3rd'];
        $lot = ['B','C','D','E'];
        $station = ['P1','P2','P3','P4','P5'];
        $line = ['1','2','3','4'];
        $model = ['KEE','KIE','K-SUPREME GSV','KCS','KSS','K-SLIM GSV','K90','K55'];
        return view('layout.pullstrenghttest.edit', compact('data','shift','lot','station','line','model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pid = $request->id;
        PullStrengthTest::findOrFail($pid)->update([
                'date' => $request->date,
                'station' => $request->station,
                'model' => $request->model,
                'lot' => $request->lot,
                'shift' => $request->shift,
                'line' => $request->line,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'deskcription' => $request->deskcription,
                'name' => $request->name,
        ]);
        $notification = array(
            'message' => ' Data Change Succesfully',
            'alert-type' => 'success'
        );
        return Redirect::to('/pullstrengthtest')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // $data = PullStrengthTest::findOrFail($id);
        // $data->delete();
        PullStrengthTest::find($id)->delete();
        $notification = array(
            'message' => ' Data Deleted Succesfully',
            'alert-type' => 'warning'
        );
        return Redirect::to('/pullstrengthtest')->with($notification);
    }
}
