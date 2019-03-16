<?php
class Result{
    public function sum(){
        $sum="";
        if (isset($_POST['btn'])) {
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $number3 = $_POST['number3'];
            $number4 = $_POST['number4'];
            $number5 = $_POST['number5'];
            return $sum = $number1+$number2+$number3+$number4+$number5;



        }

    }
}