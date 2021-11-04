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
<?php
    if(isset($_POST['btnRegister'])) {
        // Lấy dữ liệu từ form
        $userName = $_POST['txtUsername'];
        $email = $_POST['txtEmail'];
        $pass = $_POST['txtPass'];
        $rePass = $_POST['txtRePass'];

        // Truy vấn dữ liệu
        $sql = "select * from admin where user_email = '$email' or user_name='$userName'";
        $result = mysqli_query($con, $sql);

        // Xử lý kết quả
        if(mysqli_num_rows($result) > 0) {
            echo 'Email đã tồn tại';
        } else {
            // Băm mật khẩu
            $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
            $code = md5(uniqid(rand(), true));
            $sql2 = "insert into admin(user_name, user_email, user_pass) values ('$userName', '$email', '$pass_hash')";
            $result2 = mysqli_query($con, $sql2);
            if($result2 == 1) {
                header("Location: ./login.php");
            } else {
                echo 'Lỗi';
            }
        }
    }
?>