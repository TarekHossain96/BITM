<?php
/**
 * Created by PhpStorm.
 * User: Rakib Hasan
 * Date: 09/03/19
 * Time: 11:44 PM
 */
class EvenOdd
{
    function filter($data){
        $first = $data['firstNumber'];
        $last = $data['lastNumber'];
        $result = "";
        if (isset($data['even'])){
            for ($i = $first; $i <= $last; $i++){
                if ($i%2 == 0){
                    $result .= $i." ";
                }
            }
            return $result;
        }
        elseif (isset($data['odd'])){
            for ($i = $first; $i <= $last; $i++){
                if ($i%2 != 0){
                    $result .= $i." ";
                }
            }
            return $result;
        }
    }
}