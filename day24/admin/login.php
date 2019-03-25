<?php
session_start();
if (isset($_SESSION['id'])){
    header('Location:addStudent.php');
}
    require_once "../vendor/autoload.php";
    use App\classes\Login;
    $login = new Login();
$message='';
    if (isset($_POST['btn'])){
        $message = $login->adminLogin($_POST);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin login</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="card">
                    <div class="card-title">
                        <h3 class="text-center">Admin Login</h3>
                    </div>
                    <div class="card-body">
                        <?php echo $message;?>
                        <form action="" method="post">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div><!--email close-->

                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div><!--password close-->

                            <div class="form-group row">
                                <div class="offset-3 col-md-9">
                                <button type="submit" name="btn" class="btn btn-primary btn-block">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </body>
</html>