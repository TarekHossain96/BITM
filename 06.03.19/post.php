<?php
    if ($_POST['name'] || $_POST['email'] || $_POST['mobile']){
        echo "Welcome ".$_POST['name']."<br>";
        echo "You're email ".$_POST['email']."<br>";
        echo "Your Phone ".$_POST['mobile']."<br>";
    }
?>
<form action="" method="POST">
    Name :<input type="text" name="name"><br>
    Email :<input type="text" name="email"><br>
    Mobile :<input type="text" name="mobile"><br>

    <input type="submit" name="btn" value="Submit">
</form>
