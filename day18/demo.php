<?php
/**
 * Created by PhpStorm.
 * User: Rakib Hasan
 * Date: 09/03/19
 * Time: 11:29 PM
 */
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['btn'])){
        require_once './EvenOdd.php';
        $classified = new EvenOdd();
        $result = $classified->filter($_POST);
    }
}
    ?>

<form action="" method="post">
    <table>
        <tr>
            <td>First Number</td>
            <td><input type="text" name="firstNumber" value="<?php echo $_POST['firstNumber']?>"></td>
        </tr>
        <tr>
            <td>Last Number</td>
            <td><input type="text" name="lastNumber" value="<?php echo $_POST['lastNumber']?>"></td>
        </tr>
        <tr>
            <td>Show</td>
            <td>
                <input type="radio" name="even" value="">Even
                <input type="radio" name="odd" value="">Odd

            </td>
        </tr>

        <tr>
            <td>Result</td>
            <td><input type="text" name="result" value="<?php echo $result;?>"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="submit" name="btn">
            </td>

        </tr>

    </table>
</form>