<?php
namespace App\EmployeeRepository;

interface employeeinterface
{
    public function store($data);
    public function getallemployee();
    public function updateemployee($id,$data);
    public function deleteemployee($id);

}


?>