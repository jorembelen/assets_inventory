<?php

namespace App\Http\Controllers;

use DB;
use Validator;
use App\CheckOut;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CheckInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $status = 0;
        $id = $request->input('asset_id');

        // $checkOut_id = $request->input('checkOut_id');

        DB::update('update assets set status = ? where id = ?', [$status, $id]);

        
        $checkOut_id = $request->input('checkOut_id');
        $checkOut_status = '0';

        DB::update('update check_outs set status = ? where id = ?', [$checkOut_status, $checkOut_id]);

        $checkIn = new CheckOut;

        $checkIn->emp_id = $request->input('emp_id');
        $checkIn->asset_id = $request->input('asset_id');
        $checkIn->date_issued = $request->input('date_issued');
        $checkIn->notes = $request->input('notes');
        $checkIn->remarks = 'returned';
        $checkIn->status = 0;

        // dd($checkIn);
        $checkIn->save();

        Alert::success('Success', 'Asset Has Been Returned Successfully');

        return redirect('/assets');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function show(CheckIn $checkIn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function edit(CheckIn $checkIn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CheckIn $checkIn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function destroy(CheckIn $checkIn)
    {
        //
    }
}
