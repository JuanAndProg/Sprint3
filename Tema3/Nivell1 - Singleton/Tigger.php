<?php
class Tigger {
    private static $instance;
    private $roarNumber;

    private function __construct() {
        echo "Building character..." . PHP_EOL;
        $this->roarNumber = 0;
    }
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new Tigger();
        }
        return self::$instance;
    }
    public function roar() {
        $this->roarNumber++;
        echo "Grrr!" . PHP_EOL;
    }
    public function getCounter(){
        echo "Tigger has roared " .$this->roarNumber . " times." .PHP_EOL;
    }
}
?>