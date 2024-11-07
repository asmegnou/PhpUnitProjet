<?php
    declare(strict_types=1);
    require_once __DIR__ . '/../vendor/autoload.php';
    use Acme\Employee;
    require('Employee_display.php');
    
    function sort_salaire ($a , $b){
        if ($a->getSalary() == $b->getSalary()) {
            return 0;
        }
        return ($a->getSalary() < $b->getSalary()) ? -1 : 1;
    }

    usort($tab,"sort_salaire");
    var_dump($tab);

?>