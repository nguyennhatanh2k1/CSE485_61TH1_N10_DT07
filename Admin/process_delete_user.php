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
    $id = $_GET['id'];
    $sql = "delete from users where id = '$id'";
    $result = mysqli_query($con, $sql);
    if($result > 0) {
        header("Location: ./index.php");
    }
?>