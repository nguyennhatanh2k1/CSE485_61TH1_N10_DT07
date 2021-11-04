<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Admin add user</title>
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
?>

<main class="main-login vh-100 w-100 d-flex justify-content-center align-items-center">
    <form action="./process_register.php" method="post" class="form w-100">
        <a href="../index.php" class="mb-5 d-flex justify-content-center">
            <img src="../logo.png" alt="" class="form__logo-img">
        </a>
        <div class="mb-3">
            <label for="inputUsername" class="form-label">Enter Username</label>
            <input type="text" class="form-control form-control-login" required placeholder="Enter Username" name="txtUsername" id="inputUsername">
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Enter Email</label>
            <input type="email" class="form-control form-control-login" required placeholder="Enter Email" name="txtEmail" id="inputEmail">
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Enter Password</label>
            <input type="password" class="form-control form-control-login" required placeholder="Enter Password" name="txtPass" id="inputPassword">
        </div>
        <div class="mb-3">
            <label for="inputRePassword" class="form-label">Re-enter Password</label>
            <input type="password" class="form-control form-control-login" required placeholder="Re-enter Password" name="txtRePass" id="inputRePassword">
        </div>
        <button type="submit" class="form-btn btn btn-primary w-100 fw-bold bg-transparent" name="btnRegister">Register</button>
        <div class="mt-3">
            Nếu đã có tài khoản, chọn
            <a href="./login.php">Đăng  nhập</a>
        </div>
    </form>
</main>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>