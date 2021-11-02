<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Admin</title>
  </head>
<?php
    session_start();
    if(!isset($_SESSION['loginSuccess'])) {
        header("Location: index.php");
    }
?>

<main class="container mt-5">
    <h2 class="mb-3">Thông tin người dùng</h2>
    <a href="adduser.php" class="btn btn-success my-3">
        <i class="fas fa-user-plus"></i>
        Thêm người dùng
    </a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">User ID</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Gender</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Sửa thông tin</th>
                <th scope="col">Xóa nhân viên</th>
            </tr>
        </thead>
        <tbody>
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

                // Thực hiện truy vấn
                $sql = 'select id, userid, first_name, last_name, gender, email, password from users';
                $result = mysqli_query($con, $sql);

                // Xử lí kết quả
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>',
                            '<th scope="row">'.$row['id'].'</th>',
                            '<td>'.$row['userid'].'</td>',
                            '<td>'.$row['first_name'].'</td>',
                            '<td>'.$row['last_name'].'</td>',
                            '<td>'.$row['gender'].'</td>',
                            '<td>'.$row['email'].'</td>',
                            '<td>'.$row['password'].'</td>',
                            '<td>
                                <a href="edituser.php?id='.$row['id'].'" class="text-warning">
                                    <i class="fas fa-user-edit"></i>
                                </a>
                            </td>',
                            '<td>
                                <a href="process_delete_user.php?id='.$row['id'].'" class="text-secondary">
                                    <i class="fas fa-user-minus"></i>
                                </a>
                            </td>',
                        '</tr>';
                    }
                }
            ?>
        </tbody>
    </table>

    <a href="../logout.php" class="btn btn-success my-3">Đăng xuất</a>
</main>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>