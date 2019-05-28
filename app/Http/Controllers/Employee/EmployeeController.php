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
/*//        Employee::create([
//            'firstname'          => $request->firstname,
//            'lastname'           =>  $request->lastname,
//            'address'           =>  $request->address,
//
//        ]);*/

         Employee::create($request->all());
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Employee $employee)
    {
       Employee::where('id',$employee->id)->delete();
    }
}
