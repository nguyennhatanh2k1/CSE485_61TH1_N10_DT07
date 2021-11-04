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
    session_start();
    if(isset($_POST['btnLogin'])) {
        $username = $_POST['txtUsername'];
        $password = $_POST['txtPass'];

        $sql = "select * from admin where user_name = '$username' and user_pass = '$password'";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) > 0) {
            $_SESSION['loginSuccess'] = $username;
            header("Location: ./index.php");
        } else {
            header("Location: ./login.php");
        }
    }


?>