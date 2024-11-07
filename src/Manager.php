<?php
declare(strict_types=1);
namespace Acme;
require_once __DIR__ . '/../vendor/autoload.php';

class Manager extends Employee implements IManager{
    protected $employeesID;
    public function __construct(int $id, string $name,float $salary, int $age){
        parent::__construct($id,$name,$salary,$age);
        $this->employeesID=array();
    }    
    public function add(int $employeeId){
        $this->employeesID[]=$employeeId;
    }
    public function getArrEmployeesId() : array{
        return $this->employeesID;
    }
}
?>
