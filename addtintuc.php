<?php
include 'connect.php';
$id_chuyenmuc = $_GET['id'];
if (!empty($_POST['submit'])) {
    if(isset($_POST['id'])&&isset($_POST['tacgia_id'])
    &&isset($_POST['chuyenmuc_id'])&&isset($_POST['tieude'])
    &&isset($_POST['motangan'])&&isset($_POST['noidung'])){

        $id=$_POST['id'];
        $tacgia_id=$_POST['tacgia_id'];
        $chuyenmuc_id=$_POST['chuyenmuc_id'];
        $tieude=$_POST['tieude'];
        $motangan=$_POST['motangan'];
        $noidung=$_POST['noidung'];
    
    $sql=" insert into tintuc(id,tacgia_id,chuyenmuc_id,tieude,motangan,noidung) values('$id','$tacgia_id','$chuyenmuc_id','$tieude','$motangan','$noidung')";
    $stmt = $conn->prepare($sql);
    $query = $stmt->execute();
    if($query){
        header("location: tintuc.php?id=$id_chuyenmuc");
    }
    else{
        echo"nooo";
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
            <ul style="background-color:#d2d2d2" class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="layout.php">Trangchu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="chuyenmuc.php">Chuyenmuc</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>

            <form method="post">
                <div class="form-group">
                    <label for="id">id</label>
                    <input type="text" class="form-control" name="id" placeholder="Enter text">
                </div>
                <div class="form-group">
                    <label for="tacgia_id">tacgia_id</label>
                    <input type="text" class="form-control" name="tacgia_id" placeholder="Enter text">
                    
                </div>
                <div class="form-group">
                    <label for="chuyenmuc_id">chuyenmuc_id</label>
                    <input type="text" class="form-control" name="chuyenmuc_id" value="<?php echo $id_chuyenmuc ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="tieude">tieude</label>
                    <input type="text" class="form-control" name="tieude" placeholder="Enter text">
                </div>
                <div class="form-group">
                    <label for="motangan">motangan</label>
                    <input type="text" class="form-control" name="motangan" placeholder="Enter text">
                </div>
                <div class="form-group">
                    <label for="noidung">noidung</label>
                    <input type="text" class="form-control" name="noidung" placeholder="Enter text">
                </div>
        
                
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </content>
    <footer style="text-align: center">anh-8689</footer>




    <!-- 

      -->
</body>

</html>