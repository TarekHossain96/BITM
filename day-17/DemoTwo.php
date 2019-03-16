<?php

require_once "./Example.php";
class DemoTwo extends Example
{
    public $age = "20";
    protected $location = "Dhaka";
    private $mobile = "01********";

    public function newOne(){
        /*echo "In One";*/
        $this->sub();
    }
    protected function newTwo(){
        echo "in two protected";
    }
    private function newThree(){
        echo "in three private";
    }
}
?>