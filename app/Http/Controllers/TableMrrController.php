<?php

namespace App\Http\Controllers;


use App\Models\MRR;
use Illuminate\Http\Request;

class TableMrrController extends Controller
{
    public function menuMrr() {
        $MRR = MRR::get();

        return view('menuMrr', compact(['MRR']));
    }

    public function edit(Request $request, $id) {
        $MRR = MRR::find($id);
        return view('edit', compact(['MRR']));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'RequestDept' => 'required'
        ]);
        $MRR = MRR::find($id);
        $MRR->update([
            'noMrr' => $request->noMrr,
            'RequestDept' => $request->RequestDept,
            'Process' => $request->Process,
            'Name' => $request->Name,
            'Description' => $request->Description,
            'Shift' => $request->Shift,
            'Date' => $request->Date,
            'BreakDownTime' => $request->BreakDownTime,
            'ReportTime' => $request->ReportTime,
            'SignSpvProd' => $request->SignSpvProd,
            'Judgement' => $request->Judgement,
            'Result' => $request->Result,
            'RepairBy' => $request->RepairBy,
            'RespownTime' => $request->RespownTime,
            'RepairStartTime' => $request->RepairStartTime,
            'RepairEndTime' => $request->RepairEndTime,
            'QcStartTime' => $request->QcStartTime,
            'QcEndTime' => $request->QcEndTime,
            'SignByQc' => $request->SignByQc,
            'QcName' => $request->QcName,
            'QCDateSign' => $request->QCDateSign,
            'SignByProd' => $request->SignByProd,
            'ProdName' => $request->ProdName,
            'ProdDateSign' => $request->ProdDateSign
        ]);
        return redirect('/mrr')->with('success', 'Data successfully updated.');
    }


}
