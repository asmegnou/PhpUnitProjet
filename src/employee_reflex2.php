<?php
declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php';
use Acme\Employee;

// Création d'un objet de la classe Employee pour l'exemple
$assia = new Employee(4, "Assia MEGNOUNIF", 4500, 26);

$reflector = new ReflectionClass(Employee::class);
// Affichage du nom de la classe
echo "<br>**Classe : " . $reflector->getName();

// Affichage de la classe parente
echo "<br>**Classe parente : ";
$parentClass = $reflector->getParentClass();

if ($parentClass) {
    echo $parentClass->getName();
} else {
    echo "Pas de classe parente";
}

// Affichage des propriétés visibles ayant une valeur par défaut
echo "<br>**Propriétés visibles ayant une valeur par défaut : ";
$defaultProperties = $reflector->getDefaultProperties();
print_r($defaultProperties);

// Affichage des propriétés publiques
echo "<br>**Propriétés publiques : ";
$publicProperties = $reflector->getProperties(ReflectionProperty::IS_PUBLIC);
$publicProps = [];

foreach ($publicProperties as $property) {
    $property->setAccessible(true); // Rendre accessible la propriété (si nécessaire)
    $publicProps[$property->getName()] = $property->getValue($assia);
}
print_r($publicProps);

// Appel de la méthode d'introspection si elle existe
echo "<br>**Toutes les propriétés : ";
$assia->introspection();
?>
