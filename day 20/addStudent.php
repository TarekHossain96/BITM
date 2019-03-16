<?php
require_once "vendor/autoload.php";
use app\classes\Student;


if (isset($_POST['btn'])){
    $student = new Student();
    $student->saveStudentInfo();
}
?>
<form action="" method="POST">
    <table>
        <tr>
            <td>Name : </td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email : </td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Mobile : </td>
            <td><input type="text" name="mobile"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>
