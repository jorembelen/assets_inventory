<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Asset;
use App\CheckOut;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalEmp =  count(Employee::all());
        $totalAsset =  count(Asset::all());
        $totalIssued =  count(Asset::wherestatus('1')->get());
        $totalAvailable =  count(Asset::wherestatus('0')->get());

        $data = [$totalEmp, $totalAsset, $totalIssued, $totalAvailable];

        return view('admin.dashboard')
        ->with('data', $data);
    }
}
