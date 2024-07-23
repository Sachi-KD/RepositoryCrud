<?php
namespace App\EmployeeRepository;
use App\EmployeeRepository\employeeinterface;
use App\Models\Employee;
class employeeimplementation  implements employeeinterface
{
    public function store($data)
    {
       $createtable = Employee::create($data);
        return  $createtable; 
    }
    public function getallemployee()
    {
        $allemployee = Employee::all();
        return  $allemployee; 
   
    }
    public function updateemployee($id, $data)
    {
        $updatecategory = $id->update($data);
        return $updatecategory;
    }
    public function deleteemployee($id)
    {
        $deletecategory = $id->delete();
        return $deletecategory;
    }
}

?>