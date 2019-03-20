<?php
require_once "vendor/autoload.php";
use App\Classes\Student;

$id = $_GET['id'];
$student = new Student;
$result = $student->getStudentInfoById($id);
$student=mysqli_fetch_assoc($result);

if (isset($_POST['btn'])){
    $student = new Student;
    $student->updateStudentinfo($id);
}
?>
<table>
    <tr>
        <td><a href="addStudent.php">Add Student ||</a></td>
        <td><a href="viewStudent.php">View Student</a></td>
    </tr>
</table>
<hr>
<form action="" method="POST">
<table>
    <tr>
        <td>Name:</td>
        <td><input type="text" name="name" value="<?php echo $student['name']?>"></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><input type="text" name="email" value="<?php echo $student['email']?>"></td>
    </tr>
    <tr>
        <td>Mobile:</td>
        <td><input type="text" name="mobile" value="<?php echo $student['mobile']?>"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="btn" value="Update"></td>
    </tr>
</table>
</form>
