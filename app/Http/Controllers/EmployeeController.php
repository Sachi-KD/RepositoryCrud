<?php

namespace App\Http\Controllers;

use Exception;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\EmployeeRepository\employeeinterface;

class EmployeeController extends Controller
{
    protected $repositoryinterface;
    public function __construct(employeeinterface $repositoryinterface)
    {
        $this->repositoryinterface = $repositoryinterface;
    }

     // insert employee
     public function store(Request $request)
    {
    try{
        $data =  $request->validate(
            [
                'employeename' => 'required|string',
                'address' => 'required|string',
                'phone' => 'required|string'
            ]
        );

        $createtable = $this->repositoryinterface->store($data);

        return response()->json(['data' => $createtable]);
       }
       catch(Exception $e)
       {
        return response()->json(['error' => $e->getMessage(),500]);
       }
      }
    
      // get all employee
      public function getallemployee()
    {
        try{

            $getallemployee = $this->repositoryinterface-> getallemployee();

            return response()->json(['data' =>  $getallemployee]);
           }
            catch(Exception $e){
            return response()->json(['error' => $e->getMessage(),500]);
           }
    }
    
       //  update employee
       public function  updateemployee(Employee $id, Request $request){
        try{
            $data =  $request->validate(
                [
                   'employeename' => 'required|string',
                    'address' => 'required|string',
                    'phone' => 'required|string'
                ]
            );

            $updateemployee= $this->repositoryinterface->updateemployee($id,$data);

            return response()->json(['data' =>"Updateeddd"]);
           }
            catch(Exception $e){
            return response()->json(['error' => $e->getMessage(),500]);
           }
    }

       // delete employee
       public function deleteemployee(Employee $id){
        try{

            $deleteemployee= $this->repositoryinterface->deleteemployee($id);

            return response()->json(['data' =>$deleteemployee]);
           }
            catch(Exception $e){
            return response()->json(['error' => $e->getMessage(),500]);
           }
    }


}
