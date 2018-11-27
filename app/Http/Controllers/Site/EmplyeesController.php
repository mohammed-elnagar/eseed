<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employee;
class EmplyeesController extends Controller
{
    //
    public function index(){

        $employees = Employee::all();
        return view('app/employees.index', compact('employees'));
    }

    public function create(){
        return view('app/employees.create');
    }

    public function store(Request $request){
        $rules = [
            'email'         => 'required|string|email|max:255|unique:employees',
            'mobile_number' => 'required|string|max:255|unique:employees',
            'name'          => 'nullable',

        ];
        $data      = $request->all();
        $validaion = \Validator::make($data, $rules);
        if($validaion->fails()){
            return redirect()->back()->withErrors($validaion);
        }
        $employee = Employee::create([
            'user_id'       => 1,
            'email'         => $request->email,
            'mobile_number' => $request->mobile_number,
            'name'          => $request->name,
            'hire_date'     => \Carbon\Carbon::parse($request->hire_date),
        ]);

        return redirect()->back()->with('success', 'Employee created');
    }


    public function edit($id){
        $employee = Employee::find($id);
        if($employee){
            return view('app/employees.edit', compact('employee'));
        }
        return redirect()->back()->with('error', 'Employee not found');
    }

    public function update(Request $request){
        $employee = Employee::find($request->id);

        if($employee){
            $rules = [
                'email'         => 'required|string|email|max:255|unique:employees,email,' . $request->id,
                'mobile_number' => 'required|string|max:255|unique:employees,mobile_number,' . $request->id,
                'name'          => 'nullable',

            ];
            $data      = $request->all();
            $validaion = \Validator::make($data, $rules);
            if($validaion->fails()){
                return redirect()->back()->withErrors($validaion);
            }
            $employee->user_id       = 1;
            $employee->email         = $request->email;
            $employee->mobile_number = $request->mobile_number;
            $employee->name          = $request->name;
            $employee->hire_date     = \Carbon\Carbon::parse($request->hire_date);
            $employee->update();
            return redirect(route('employee.index'))->with('success', 'Employee has been updated');
        }
        return redirect()->back()->with('error', 'Employee not found');
    }

    public function destroy($id){
        $employee = Employee::find($id);
        if($employee){
            $employee->delete();
            return redirect(route('employee.index'))->with('success', 'Employee has been deleted');
        }
        return redirect()->back()->with('error', 'Employee not found');

    }
}
