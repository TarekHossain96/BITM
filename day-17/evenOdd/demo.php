<?php
class Demo{
    public function makeoddEven(){
        if (isset($_POST['btn'])){
            $firstNumber = $_POST['firstNumber'];
            $lastNumber = $_POST['lastNumber'];
            $check = $_POST['check'];
                $res="";
                if ($firstNumber<$lastNumber) {
                    for ($i = $firstNumber; $i <= $lastNumber; $i++) {
                        if ($i % 2 != 0 && $check == "ODD") {
                            $res .= $i . " ";
                        } elseif ($i % 2 == 0 && $check == "EVEN") {
                            $res .= $i . " ";
                        }
                    }
                    return $res;
                }else{
                    for ($i = $firstNumber; $i >= $lastNumber; $i--) {
                        if ($i % 2 != 0 && $check == "ODD") {
                            $res .= $i . " ";
                        } elseif ($i % 2 == 0 && $check == "EVEN") {
                            $res .= $i . " ";
                        }
                    }
                    return $res;
                }
        }

    }
}