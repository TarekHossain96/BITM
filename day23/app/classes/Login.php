<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/23/2019
 * Time: 10:15 AM
 */

namespace App\classes;


class Login
{
    public function adminLogin($data){
        $email = $data['email'];
         $password = md5($data['password']);
        $sql = "SELECT * FROM users WHERE email ='$email' AND password = '$password'";
        if (mysqli_query(Connection::dbConnection(),$sql)){
            $result = mysqli_query(Connection::dbConnection(),$sql);
            $use = mysqli_fetch_assoc($result);
            if ($use){
                session_start();
                $_SESSION['id'] = $use['id'];
                $_SESSION['name'] = $use['name'];
                header('Location:addStudent.php');
            }else{
                return $message = "Please use valid email and password";
            }
        }else{
            die('Query Problem'.mysqli_error());
        }

    }
    public function adminLogout(){
        header('Location:login.php');
    }
}