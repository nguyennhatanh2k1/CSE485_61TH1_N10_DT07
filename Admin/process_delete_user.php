<?php
    // Kết nối SQL
    const HOST = 'localhost';
    const USER = 'root';
    const PASS = '';
    const DB = 'tlu_phonebook';
    $con = mysqli_connect(HOST, USER, PASS, DB);
    if (!$con) {
        die('Không kết nối được');
    }
?>
<?php
    $emp_id = $_GET['id'];
    $sql = "delete from db_employees where emp_id = '$emp_id'";
    $result = mysqli_query($con, $sql);
    if($result > 0) {
        header("Location: ./index.php");
    }
?>