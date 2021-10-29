<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Template</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-info">
    <div class="container-fluid">
    <ul class="navbar-nav" style="margin-left:100px">
        <li class="nav-item">
        <a class="nav-link" href="#"><i class="fab fa-blogger-b"></i>Blog</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="friend.php"><i class="fas fa-user-friends"></i>Bạn bè</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-sms"></i>Tin nhắn</a>
        </li>  
    </ul>
    <form class="d-flex" style="margin-right:100px">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
       <a class="nav-link" href="home.php"style="margin-right:50px"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
  </nav>
    <div class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 15rem; margin-left:50px; margin-top:50px">
                    <img class="card-img-top" src="../img/user.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-center">User name</p>
                        <a href="#" class="btn btn-links">Xem trang cá nhân</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-top:50px">
                <button class="btn btn-primary" type="button">Đăng bài</button>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>