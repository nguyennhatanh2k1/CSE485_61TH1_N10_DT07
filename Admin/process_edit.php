?php

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
    $userid = $_POST['userid'];
    $userfname = $_POST['userfname'];
    $userlname = $_POST['userlname'];
    $usergender = $_POST['usergender'];
    $useremail = $_POST['useremail'];
    $userpassword = $_POST['userpassword'];

    if(isset($_POST['btnLuu'])) {


        echo $userid."<br>";
        echo $userfname."<br>";
        echo $userlname."<br>";
        echo $usergender."<br>";
        echo $useremail."<br>";
        echo $userpassword."<br>";

        // $sql = "update db_employees set emp_name = '$empName', emp_position = '$empPosition', emp_email = '$empEmail', emp_mobile = '$empMobile', office_id = '$officeID' where emp_id = '$id'";
        // $result = mysqli_query($con, $sql);

        // if($result) {
        //     header("Location: ./index.php");
        // } else {
        //     echo 'Lỗi.';
        // }
    }

    mysqli_close($con);
?>