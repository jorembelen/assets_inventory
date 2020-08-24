<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Validator;
use App\Employee;
use App\CheckOut;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CheckOutsImport;

class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();

        $checkOuts = CheckOut::wherestatus('1')->with('employees')->paginate(10);

        return view('admin.checkOuts')
        ->with('employees', $employees)
        ->with('checkOuts', $checkOuts);
    }

    public function assigned($id)
    {
        $employees = Employee::all();

        $checkOuts = CheckOut::wherestatus('1')->where('asset_id', $id)->get();

        // dd($checkOuts);
        return view('includes.checkOut.search')
        ->with('employees', $employees)
        ->with('checkOuts', $checkOuts);
    }

    public function indexImport()
    {
        $checkOuts = CheckOut::wherestatus('1')->with('employees')->get();

        return view('includes.assets.importIssued', compact('checkOuts', $checkOuts));
    }

    public function import(Request $request) 
    {
        

        $validator = Excel::import(new CheckOutsImport,request()->file('file'));
        
           
        return redirect('/checkOuts')->with('success', 'Assets Has Been imported Successfully');
    }

    public function searchAssigned(Request $request)
    {
       
        $employees = Employee::all();

        $str = $request->input('search');
        $option = $request->input('options');
        $checkOuts = CheckOut::where($option, 'LIKE' , '%'.$str.'%')->wherestatus('1')->get();
        
        return view('includes.checkOut.search')
        ->with('employees', $employees)
        ->with('checkOuts', $checkOuts);
    }

    public function active()
    {
        $checkOuts = CheckOut::wherestatus('1')
        ->latest()
        ->get();

        return view('includes.checkOut.active', compact('checkOuts', $checkOuts));
    }

    public function history()
    {
        $checkOuts = CheckOut::with('employees')->get();

        return view('admin.history', compact('checkOuts', $checkOuts));
    }

    public function historyEdit($id)
    {
        $employees = Employee::all();

        $checkOuts = CheckOut::with('employees')->where('id', $id)->paginate(10);

        // dd($checkOuts);

        return view('includes.checkOut.history_edit')
        ->with('employees', $employees)
        ->with('checkOuts', $checkOuts);
    }

    public function print($id)
    {
        // $checkOuts = CheckOut::wherestatus('1')->with('employees')->get();
        $checkOuts = CheckOut::with('employees')->where('id', $id)->get();

        return view('admin.issue_form', compact('checkOuts', $checkOuts));
    }

    public function select($emp_id)
    {
        // $data = $request->input('checkbox');

        $checkOuts = CheckOut::with('employees')->where('emp_id', $emp_id)->wherestatus('1')->get();


        // dd($data);

        return view('admin.printAll', compact('checkOuts', $checkOuts));
    }

    public function printSelect(Request $request)
    {
        if ($request->checkbox == 0) {
            return back()->with('errors', 'Please select atleast one record!');
        }

        $checkOuts = CheckOut::whereIn('id', $request->checkbox)->get();

      
        // dd($checkOuts);

        return view('includes.checkOut.print', compact('checkOuts', $checkOuts));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'emp_id' => 'required',
            'asset_id' => 'required',
            'date_issued' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        $status = 1;
        $id = $request->input('asset_id');
        $badge = $request->input('emp_id');

        DB::update('update assets set status = ?, emp_id = ? where id = ?', [$status, $badge, $id]);

        $checkOut = new CheckOut;

        $checkOut->emp_id = $request->input('emp_id');
        $checkOut->asset_id = $request->input('asset_id');
        $checkOut->date_issued = $request->input('date_issued');
        $checkOut->notes = $request->input('notes');
        $checkOut->badge = $request->input('badge');
        $checkOut->name = $request->input('name');
        $checkOut->remarks = 'received';
        $checkOut->status = 1;

        // dd($checkOut);
        $checkOut->save();

        // Alert::success('Success', 'Asset Has Been Returned Successfully');

        return redirect('/assets')->with('success', 'Asset Has Been Assigned Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CheckOut  $checkOut
     * @return \Illuminate\Http\Response
     */
    public function show(CheckOut $checkOut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CheckOut  $checkOut
     * @return \Illuminate\Http\Response
     */
    public function edit(CheckOut $checkOut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CheckOut  $checkOut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'emp_id' => 'required',
            'date_issued' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        

        $checkOut = CheckOut::findOrFail($id);

        $checkOut->emp_id = $request->input('emp_id');
        $checkOut->date_issued = $request->input('date_issued');
        $checkOut->notes = $request->input('notes');
        $checkOut->user = $request->input('user');

        // dd($checkOut);
        $checkOut->update();

        // Alert::success('Success', 'Asset Has Been Returned Successfully');

        return redirect('/checkOuts')->with('success', 'Asset Has Been Updated Successfully');
    }

  

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CheckOut  $checkOut
     * @return \Illuminate\Http\Response
     */
    public function destroy(CheckOut $checkOut)
    {
        //
    }
}
