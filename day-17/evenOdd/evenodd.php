<?php
require_once "./demo.php";
$demo = new Demo();
$res = $demo->makeoddEven();
?>

<form action="" method="POST">
    <table>
        <tr>
            <td>First Number</td>
            <td><input type="text" name="firstNumber"></td>
        </tr>
        <tr>
            <td>Last Number</td>
            <td><input type="text" name="lastNumber"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="radio" name="check" value="ODD">ODD
                <input type="radio" name="check" value="EVEN">EVEN
            </td>
        </tr>
        <tr>
            <td>Result</td>
            <td><textarea rows="3" cols="30"><?php echo $res;?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>

</form>
