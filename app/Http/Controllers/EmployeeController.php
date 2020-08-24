<?php

namespace App\Http\Controllers;

use App\Employee;
use Validator;
use Input;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Imports\EmployeesImport;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::paginate(10);

        return view('admin.employees', compact('employees', $employees));
    }

    public function indexSearch()
    {

        return view('includes.employees.index');
    }

    public function search(Request $request)
    {
       
        // $employees = Employee::all();

        $str = $request->input('search');
        $option = $request->input('options');
        $data = Employee::where($option, 'LIKE' , '%'.$str.'%')->get();
        // return view('includes.employees.search')->with(['employees' => $employees , 'search' => true ]);
        return view('includes.employees.search')
        ->with('data', $data);
    }
    
    public function indexImport()
    {
        $employees = Employee::paginate(10);

        return view('includes.employees.import', compact('employees', $employees));
    }

    public function import(Request $request) 
    {
        

        $validator = Excel::import(new EmployeesImport,request()->file('file'));
        
           
        return redirect('/employees')->with('success', 'Employee Has Been imported Successfully');
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
            'badge' => 'required',
            'name' => 'required'
        ]);


        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        if (Employee::where('badge', '=', Input::get('badge'))->exists()) {

            return back()->with('errors', 'Employees Badge already exist!');
         }
  
         $employees = new Employee;

         $employees->badge = $request->input('badge');
         $employees->name = $request->input('name');
         $employees->designation = $request->input('designation');
         $employees->location = $request->input('location');
         $employees->unit_code = $request->input('unit_code');
         $employees->remarks = $request->input('remarks');
 
         $employees->save();

         return redirect('/employees')->with('success', 'Employee Has Been Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $badge)
    {
        $validator = Validator::make($request->all(), [
            'badge' => 'required',
            'name' => 'required'
        ]);


        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        $employees = Employee::findOrFail($badge);

         $employees->badge = $request->input('badge');
         $employees->name = $request->input('name');
         $employees->designation = $request->input('designation');
         $employees->location = $request->input('location');
         $employees->unit_code = $request->input('unit_code');
         $employees->remarks = $request->input('remarks');
 
         $employees->update();

         return redirect('/employees')->with('success', 'Employee Has Been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($badge)
    {
        $employees = Employee::findOrFail($badge);

        $employees->delete();

        return redirect('/employees')->with('success', 'Employee Has Been Deleted Successfully');
    }
}
