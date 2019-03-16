<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['btn'])){
        require_once './Result.php';
        $demo = new Result();
        $result = $demo->sum();
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $number3 = $_POST['number3'];
        $number4 = $_POST['number4'];
        $number5 = $_POST['number5'];

    }
}
?>

<form action="" method="post">
    <table>
        <tr>
            <td>1st Number</td>
            <td><input type="text" name="number1"></td>
        </tr>
        <tr>
            <td>2nd Number</td>
            <td><input type="text" name="number2"></td>
        </tr>
        <tr>
            <td>3rd Number</td>
            <td><input type="text" name="number3"></td>
        </tr>
        <tr>
            <td>4th Number</td>
            <td><input type="text" name="number4"></td>
        </tr>
        <tr>
            <td>5th Number</td>
            <td><input type="text" name="number5"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btn" value="Submit">
            </td>
        </tr>

        <tr>
            <table border="1" style="height: 100px; width: 300px">
                <tr>
                    <td>1st</td>
                    <td>2nd</td>
                    <td>3rd</td>
                    <td>4th</td>
                    <td>5th</td>
                    <td>Result</td>
                </tr>
                <tr>
                    <td><?php echo $number1;?></td>
                    <td><?php echo $number2;?></td>
                    <td><?php echo $number3;?></td>
                    <td><?php echo $number4;?></td>
                    <td><?php echo $number5;?></td>
                    <td><?php echo $result;?></td>
                </tr>
            </table>
        </tr>


    </table>
</form>