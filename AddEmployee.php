<?php
include "sqlfun.php";
class EmployeeManagement extends sqlfun{
    function add(){
        $this->AddEmployee($_GET['name'], $_GET['mob1'], $_GET['mob2'], $_GET['address'], $_GET['position'], $_GET['joining_date']);
    }
}

$emp = new EmployeeManagement();
$emp->add();
?>