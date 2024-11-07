<?php
    declare(strict_types=1);
    require_once __DIR__ . '/../vendor/autoload.php';
    use Acme\Employee;
  

    // Création d'un objet de la classe Employee pour l'exemple
    $assia = new Employee(4,"Assia MEGNOUNIF",  4500, 26);

    $className = get_class($assia);
    $name= explode("\\", $className);
    echo "<br>**Classe : ". end($name);

    echo "<br>**Classe parente : " ;
    $parentClassName = get_parent_class($assia);

    if($parentClassName!=""){
        echo $parentClassName;
    }else{
        echo "Pas de classe parente";
    }

    echo "<br>**Propriétés visibles ayant une valeur par défaut : ";
    $defaultProp = get_class_vars($className);
    print_r($defaultProp);
    
    echo "<br>** Propriétés publiques : " ;
    $publicProp = get_object_vars($assia);
    print_r($publicProp);
    

    // appelle get_object_vars depuis l'objet
    echo "<br>**Toutes les propriétés :\n";
    $assia->introspection();
?>