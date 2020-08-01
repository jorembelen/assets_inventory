<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Employee;
use App\CheckOut;
use Validator;
use Input;
use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $assets = Asset::all();

        $employees = Employee::all();

        $checkOuts= CheckOut::with('employees', 'assets')->get();

        // dd($checkOuts);



        return view('admin.assets')
        ->with('assets', $assets)
        ->with('employees', $employees)
        ->with('checkOuts', $checkOuts);
    }


    public function assigned()
    {

        $assets = Asset::wherestatus('1')->get();

        $employees = Employee::all();

        $checkOuts= CheckOut::all();


        return view('admin.assigned')
        ->with('assets', $assets)
        ->with('employees', $employees)
        ->with('checkOuts', $checkOuts);
    }

    public function assignable()
    {

        $assets = Asset::wherestatus('0')->get();

        $employees = Employee::all();

        $checkOuts= CheckOut::all();


        return view('admin.assignable')
        ->with('assets', $assets)
        ->with('employees', $employees)
        ->with('checkOuts', $checkOuts);
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
            'type' => 'required',
            'description' => 'required',
            'serial_number' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        $input = $request->all();

        if (Asset::where('serial_number', '=', Input::get('serial_number'))->exists()) {

            return back()->with('errors', 'Serial Number already exist!');
         }
  
         $assets = new Asset;

         $assets->ritcco = $request->input('ritcco');
         $assets->type = $request->input('type');
         $assets->description = $request->input('description');
         $assets->serial_number = $request->input('serial_number');
         $assets->mobile_number = $request->input('mobile_number');
         $assets->asset_number = $request->input('asset_number');
         $assets->date_purchased = $request->input('date_purchased');
         $assets->remarks = $request->input('remarks');
 
         $assets->save();

         return redirect('/assets')->with('success', 'Asset Has Been Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit(Asset $asset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'description' => 'required',
            'serial_number' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        $assets = Asset::findOrFail($id);

        $assets->ritcco = $request->input('ritcco');
        $assets->type = $request->input('type');
        $assets->description = $request->input('description');
        $assets->serial_number = $request->input('serial_number');
        $assets->mobile_number = $request->input('mobile_number');
        $assets->asset_number = $request->input('asset_number');
        $assets->date_purchased = $request->input('date_purchased');
        $assets->remarks = $request->input('remarks');

        $assets->update();

         return redirect('/assets')->with('success', 'Asset Has Been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asset = Asset::findOrFail($id);

        $asset->delete();

        Alert::success('Success', 'Asset Has Been Deleted Successfully');

        return redirect('/assets');
    }
}
