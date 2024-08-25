<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard() {
     
        return view('dashboard');
    }

    public function index() {
        $data = User::get();

        return view('index', compact('data'));
    }
}
