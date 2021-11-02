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

    $userid = $_POST['userid'];
    $userfname = $_POST['userfname'];
    $userlname = $_POST['userlname'];
    $usergender = $_POST['usergender'];
    $useremail = $_POST['useremail'];
    $userpassword = $_POST['userpassword'];

    $sql = "insert into db_myblog( userid, first_name, last_name, gender, email, password)
            values('$userid', '$userfname', '$userlname', '$usergender', ' $useremail','$userpassword ')";
    $result = mysqli_query($con, $sql);
    if($result > 0) {
        header('Location: index.php');
    } else {
        echo 'Lỗi.';
    }

    mysqli_close($con);
?>