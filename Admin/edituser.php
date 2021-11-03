<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Admin edit user</title>
  </head>
<?php
    // Kết nối SQL
    const HOST = 'localhost';
    const USER = 'root';
    const PASS = '';
    const DB = 'db_myblog';
    $con = mysqli_connect(HOST, USER, PASS, DB);
    if (!$con) {
        die('Không kết nối được');
    }
    $id = $_GET['id'];
    $sql = "select userid, first_name, last_name, gender, email, password from users where  id = '$id'";
    $result_current = mysqli_query($con, $sql);
    $row_current = mysqli_fetch_assoc($result_current);
    ?>

<main class="container mt-5">
    <h2 class="mb-3">Nhập thông tin người dùng:</h2>
    
    <form action="" method="post">  
        <div class="mb-3 row">
            <label for="userid" class="col-sm-2 col-form-label">User id: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['userid'] ?>" class="form-control" id="userid" name="userid">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="userfname" class="col-sm-2 col-form-label">First name: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['first_name'] ?>" class="form-control" id="userfname" name="userfname">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="userlname" class="col-sm-2 col-form-label">Last name: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['last_name'] ?>" class="form-control" id="userlname" name="userlname">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="usergender" class="col-sm-2 col-form-label">Gender: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['gender'] ?>" class="form-control" id="usergender" name="usergender">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="useremail" class="col-sm-2 col-form-label">Email: </label>
            <div class="col-sm-10">
                <input type="email" value="<?php echo $row_current['email'] ?>" class="form-control" id="useremail" name="useremail">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="userpassword" class="col-sm-2 col-form-label">Password: </label>
            <div class="col-sm-10">
            <input type="password" value="<?php echo $row_current['password'] ?>" class="form-control" id="userpassword" name="userpassword">
            </div>
        </div>

        <div class="mb-3 row" style="margin-top:20px; margin-left:400px">
            <button name="btnLuu" type="submit" class="btn btn-success" style="width:200px">Lưu lại</button>
        </div>
    </form>
</main>
<?php
 
    if(isset($_POST['btnLuu'])) {
        $userid = $_POST['userid'];
        $userfname = $_POST['userfname'];
        $userlname = $_POST['userlname'];
        $usergender = $_POST['usergender'];
        $useremail = $_POST['useremail'];
        $userpassword = $_POST['userpassword'];
        // echo $userfname."<br>";
        // echo $userlname."<br>";
        // echo $usergender."<br>";
        // echo $useremail."<br>";
        // echo $userpassword."<br>";
        $pass_hash= password_hash($userpassword,PASSWORD_DEFAULT);
        $sql_update = "update users set  userid = '$userid',first_name = '$userfname', last_name = '$userlname', gender = '$usergender', email = '$useremail', password ='$pass_hash' where id = '$id'";
        $result_update = mysqli_query($con, $sql_update);

        if($result_update) {
            header("Location: ./index.php");
        } else {
            echo 'Lỗi.';
        }
    }

    mysqli_close($con);
?>
 


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>