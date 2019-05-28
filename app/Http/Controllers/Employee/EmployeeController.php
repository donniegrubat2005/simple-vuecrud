<?php

namespace App\Http\Controllers\Employee;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\CssSelector\Tests\Parser\Shortcut\EmptyStringParserTest;

class EmployeeController extends Controller
{

    public function index()
    {
        //$employee = Employee::all();
        return view('employee.home');


    }

    public function getAll() {
        return Employee::all();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
      Employee::create($request->all());
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return Employee::find($id);
    }


    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);

        $employee->update($request->all());

        return response()->json('successfully updated');
    }


    public function destroy(Employee $employee)
    {
       Employee::where('id',$employee->id)->delete();
    }
}
