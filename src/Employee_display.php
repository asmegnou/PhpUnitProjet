<?php // ./src/Employee.php
   declare(strict_types=1);
   require_once __DIR__ . '/../vendor/autoload.php';
   use Acme\Employee;
   require('employee_raise.php');


   $emp1= new Employee(1,"superman", 1.27,80);
   $emp2 = new Employee(2,"batman",1, 73);
   $emp3= new Employee (3,"spiderman",0.82, 50);
   $tab  = [];
   array_push($tab, $emp1, $emp2, $emp3);

   $total=0;
   foreach($tab as $emp){
        $total+=$emp->getSalary();
    }
    $mean=$total/3;
    echo "Avant augmentation :<br>"; 
    foreach($tab as $emp){
        echo $emp->__toString(); 
    }
    echo "mean salary = $mean<br>";


    array_walk( $tab, 'employee_raise');
    echo "Après augmentation :<br>";
    try{
        foreach($tab as $emp){
            echo $emp->__toString(); 
        }
        $a=[];
       employee_raise($a);
    }catch(Exception $e){
        echo 'Caught exception:  '.$e->getMessage().'<br>';
    }
    


?>