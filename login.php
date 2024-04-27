<?php
    session_start();
    include'connect.php';
    if(!empty($_POST['submit'])){
        if(isset($_POST['username'])&&isset($_POST['matkhau'])){
            $username = $_POST['username'];
            $matkhau = $_POST['matkhau'];
            $sql="select * from user where username='$username' and matkhau='$matkhau'";
            $stmt = $conn->prepare($sql);
            $query = $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if($row){
                $_SESSION['username']= $username;
                header("location: layout.php");
            }
            else {
                echo " sai";
            }
        }
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
            <form method="post">
                <div class="form-group">
                    <label for="username">Email address</label>
                    <input type="text" class="form-control" name="username" 
                        placeholder="Enter email">
                   
                </div>
                <div class="form-group">
                    <label for="matkhau">Password</label>
                    <input type="password" class="form-control" name="matkhau" placeholder="Password">
                </div>
                
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </content>
    <footer style="text-align: center">anh-8689</footer>



</body>

</html>