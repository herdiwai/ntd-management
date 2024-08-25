<?php

namespace App\Http\Controllers;

use App\Models\HourlyOutPutPD;
use Illuminate\Http\Request;

class HourlyOutputPDController extends Controller
{
   public function index() {

        $data = HourlyOutputPD::all();
        return view('layout.hourlyoutputpd.index', ['data' =>$data]);
   }
}
