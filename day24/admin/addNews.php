<?php
session_start();
if ($_SESSION['id']==NULL){
    header('Location:login.php');
}
require_once "../vendor/autoload.php";
$message='';
use App\classes\Login;
use App\Classes\News;
$login = new Login();
if (isset($_GET['logout'])){
    $login->adminLogout();
}
if (isset($_GET['btn'])){
    $news = new News();
    $message = $news->saveNewsInfo();
}

/*$message='';
if(isset($_POST['btn'])){
    $student = new Student();
    $message = $student->saveStudentInfo();
}*/

?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
<?php include 'include/menu.php'?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card">
                <div class="card-title">
                    <h3 class="text-center">Add News</h3>
                </div>
                <div class="card-body">
                    <h3><?php echo $message?></h3>

                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">News title</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="news_title">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3">News Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="news_description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">News Image</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="news_image" accept="image/*">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Publication Status</label>
                            <div class="col-md-9">
                                <select class="form-control" name="status">
                                    <option>----Select Publication Status----</option>
                                    <option value="1">Published</option>
                                    <option value="0">UnPublished</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="offset-3 col-md-9">
                                <button type="submit" name="btn" class="btn btn-primary btn-block">Save News</button>
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