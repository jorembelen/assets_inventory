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
use App\Imports\AssetsImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Redirect;


class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        
        $assets = Asset::where('status', '0')
        ->orWhere('status', '=', 1)
        ->with('employees')
        ->latest()
        ->paginate(10);

        $employees = Employee::all();

        $checkOuts= CheckOut::with('employees', 'assets')->get();




        return view('admin.assets')
        ->with('assets', $assets)
        ->with('employees', $employees)
        ->with('response')
        ->with('checkOuts', $checkOuts);
    }


    public function indexSearch()
    {

        return view('includes.assets.index');
    }

    public function searchAsset(Request $request)
    {
       
        $employees = Employee::all();

        $str = $request->input('search');
        $option = $request->input('options');
        $data = Asset::where($option, 'LIKE' , '%'.$str.'%')->get();
        return view('includes.assets.search')
        ->with('data', $data)
        ->with('employees', $employees);
    }

    public function indexImport()
    {

        $assets = Asset::all();

        $employees = Employee::all();

        $checkOuts= CheckOut::with('employees', 'assets')->get();




        return view('includes.assets.import')
        ->with('assets', $assets)
        ->with('employees', $employees)
        ->with('checkOuts', $checkOuts);
    }

    public function import(Request $request) 
    {
        

        $validator = Excel::import(new AssetsImport,request()->file('file'));
        
           
        return redirect('/assets')->with('success', 'Assets Has Been imported Successfully');
    }

    public function assigned()
    {

        $assets = Asset::wherestatus('1')->latest()->get();

        $employees = Employee::all();

        $checkOuts= CheckOut::all();


        return view('admin.assigned')
        ->with('assets', $assets)
        ->with('employees', $employees)
        ->with('checkOuts', $checkOuts);
    }

    public function assignable()
    {

        $assets = Asset::wherestatus('0')->latest()->get();

        $employees = Employee::all();

        $checkOuts= CheckOut::all();


        return view('admin.assignable')
        ->with('assets', $assets)
        ->with('employees', $employees)
        ->with('checkOuts', $checkOuts);
    }

    public function scrap()
    {

        $assets = Asset::wherestatus('2')->latest()->get();

        $employees = Employee::all();

        $checkOuts= CheckOut::all();


        return view('includes.assets.scrap')
        ->with('assets', $assets)
        ->with('employees', $employees)
        ->with('checkOuts', $checkOuts);
    }

    public function scrapAsset(Request $request, $id)
    {
        

        $asset = Asset::findOrFail($id);

        $asset->status = 2;

        $asset->update();

        return redirect('/assets')->with('success', 'Asset Has Been Scrapped Successfully');
    }

    public function restore(Request $request, $id)
    {
        

        $asset = Asset::findOrFail($id);

        $asset->status = 0;

        $asset->update();


        return redirect('/assets')->with('success', 'Asset Has Been Restored Successfully');
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
            'serial_number' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }


        if (Asset::where('serial_number', '=', Input::get('serial_number'))->exists()) {

            return back()->with('errors', 'Serial Number already exist!');
         }

         $input = $request->all();
  
         if($request->hasfile('image')) {
            $file = $request->file('image');
            // get the name of the image
            $extension = $file->getClientOriginalExtension();
            $filename['imagename'] = time() . '.' .$extension;

            // dd($filename);
            $destinationPath = public_path('/images/uploads/', $filename);
            $file->move($destinationPath, $filename['imagename']);

            $input['image'] = $filename['imagename'];
        //  } else {

        //     $pic_path = 'no_image.jpg';

        //     $input['image'] = $pic_path;

         }

        Asset::create($input);


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
            'serial_number' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        $assets = Asset::findOrFail($id);

       
        if($request->hasfile('image')) {
            $file = $request->file('image');

            // Delete old image from file
           if($assets->image != '') {
            unlink(public_path('/images/uploads/') . $assets->image);

           }
            // get the name of the image
            $extension = $file->getClientOriginalExtension();
            $filename['imagename'] = time() . '.' .$extension;

            // dd($filename);
            $destinationPath = public_path('/images/uploads/', $filename);
            $file->move($destinationPath, $filename['imagename']);

            $input = $request->all();
            $input['image'] = $filename['imagename'];
            $assets->update($input);

           } else {

            $assets->update($request->all());

           }
    

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

        // Delete image from file
        if($asset->image) {
            unlink(public_path('/images/uploads/') . $asset->image);

            $asset->delete();

        }

        Alert::success('Success', 'Asset Has Been Deleted Successfully');

        return redirect('/assets');
    }
}
