<?php
namespace App\Classes;
class Student
{
    public function saveStudentInfo(){
        $link = mysqli_connect('localhost','root','','demo');
        $sql = "INSERT INTO demos(name,email,mobile) VALUES ('$_POST[name]','$_POST[email]','$_POST[mobile]')";
        if(mysqli_query($link,$sql)){
            $message = "Student Info saved successfully";
            return $message;
        } else {
            die('Query Problem'.mysqli_error($link));
        }
    }
    public function viewStudentInfo(){
        $link = mysqli_connect('localhost','root','','demo');
        $sql = "SELECT * FROM demos";
        if(mysqli_query($link,$sql)){
            $result = mysqli_query($link,$sql);
            return $result;
        } else {
            die('Query Problem'.mysqli_error($link));
        }
    }
    public function getStudentInfoById($id){
        $link = mysqli_connect('localhost','root','','demo');
        $sql = "SELECT * FROM demos WHERE id = '$id'";
        if(mysqli_query($link,$sql)){
            $result = mysqli_query($link,$sql);
            return $result;
        } else {
            die('Query Problem'.mysqli_error($link));
        }
    }
    public function updateStudentinfo($id){
        $link = mysqli_connect('localhost','root','','demo');
        $sql = "UPDATE demos SET name='$_POST[name]', email='$_POST[email]', mobile='$_POST[mobile]' WHERE id='$id'";
        if(mysqli_query($link,$sql)){
            header('Location:viewStudent.php');
        } else {
            die('Query Problem'.mysqli_error($link));
        }
    }
    public function deleteStudentInfo($id){
        $link = mysqli_connect('localhost','root','','demo');
        $sql = "DELETE FROM demos WHERE id='$id'";
        if (mysqli_query($link,$sql)){
            /*$message = "Student info delete successfully";
            return $message;*/
            header('Location:viewStudent.php');
        }else{
            die('Connection Problem'.mysqli_error($link));
        }
    }
    public function searchStudentInfo(){
        $link = mysqli_connect('localhost','root','','demo');
        $sql = "SELECT * FROM demos WHERE name LIKE '%$_POST[search_text]%' || email LIKE '%$_POST[search_text]%' || mobile LIKE '%$_POST[search_text]%'";
        if (mysqli_query($link,$sql)){
            $result = mysqli_query($link,$sql);
            return $result;
        }else{
            die('Connection Problem'.mysqli_error($link));
        }
    }
}