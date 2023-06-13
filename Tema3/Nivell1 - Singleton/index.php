<?php
include("Tigger.php");

$tigger = Tigger::getInstance();

$tigger->roar();
$tigger->roar();
$tigger->roar();
$tigger->roar();
$tigger->roar();

$tigger->getCounter();

function testClassTigger(){
    $s1 = Tigger::getInstance();
    $s2 = Tigger::getInstance();
    if ($s1 === $s2){
        echo "Singleton pattern is working";
    } else {
        echo "Something is wrong with Singleton pattern";
    }
}

testClassTigger();
?>

