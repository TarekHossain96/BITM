<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/11/2019
 * Time: 11:33 AM
 */

class Example
{
  public $name = "Tarek Hossain";
  protected $city = "Dhaka";
  private  $country = "Bangladesh";
  public $value;
  /*public function __construct($data)
  {
      echo $data;
      $this->value = $data;
  }*/

  public function add(){
      echo "In add";
      /*$this->add();*/
        /*echo $this->value;*/
  }
  protected function sub(){
      echo "In sub";
  }
  private function div(){
      echo "In div";
  }
}