<?php
namespace App\Classes;

class Demo
{
    public $name = "Trek Hossain";
    protected $email = "info.tarek96@gmail.com";
    private $mobile= "0151*******";

    public function test(){
        /*echo "In public";*/
        $this->hello();
    }
    protected function hello(){
        echo "In protected file";
    }
    private function example(){
        echo "In private file";
    }

}