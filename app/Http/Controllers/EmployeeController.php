<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\EmployeeDetails;

class EmployeeController extends Controller
{
    //view employee
    public function index()
    {
        $data['allEmployee'] = Employee::all();
        return view('dashboard', $data);
    
    }

    //create employee

    public function createEmployee()
    {
        return view('create_employee');
    }

    public function addEmployee(Request $request)
    {

        $data = new Employee();
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->save();

        return redirect()->route('dashboard');
    }

    //employee details update
    public function updateEmployee($id)
    {
        $data = Employee::find($id);
        return view('update_employee', ['data' => $data]);
    }

    public function updated(Request $request)
    {
        
        $data = new EmployeeDetails;
        $data->employee_id = $request->employee_id;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->save();

       return redirect()->route('employee_detail');
    }

    //employee details
    public function employeeDetail()
    {   
        $data['allEmployee'] = employeeDetails::all();
        return view('employee_detail' ,$data);
    }

    //emlpoyee remove

    public function remove($id)
    {
        $data = Employee::find($id);
        EmployeeDetails::where('employee_id', $data->id)->delete();
        $data->delete();
        return redirect()->back();
    }
}
