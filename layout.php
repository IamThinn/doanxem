<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <header style="text-align: center">
        <h1><img style="height: 50px"
                src="https://inkythuatso.com/uploads/images/2021/12/logo-dai-hoc-hang-hai-inkythuatso-14-16-05-20.jpg"
                alt="">Quan ly tin tuc</h1>
    </header>
    <content>
        <div class="container">
            <ul style="background-color:#d2d2d2" class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="layout.php">Trangchu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="chuyenmuc.php">Chuyenmuc</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">dangxuat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </content>
    <footer style="text-align: center">anh-8689  <?php echo $_SESSION['username'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    echo "".date('H:i:s d-m-Y');
    ?></footer>



</body>

</html>