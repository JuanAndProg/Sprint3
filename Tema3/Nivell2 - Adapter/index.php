<?php
require_once 'poultry.php';

$duck = new Duck;
$turkey = new Turkey;
$turkey_adapter = new TurkeyAdapter($turkey);

function duck_interaction($duck){
    $duck->quack();
    $duck->fly();
}

echo "The Turkey says...\n";
$turkey->gobble();
$turkey->fly();

echo "The Duck says...\n";
duck_interaction($duck);

echo "The TurkeyAdapter says...\n";
duck_interaction($turkey_adapter);
?>