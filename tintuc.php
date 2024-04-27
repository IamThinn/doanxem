<?php
    include'connect.php';
    $id_chuyenmuc = $_GET['id'];
    if(empty($_POST['submit'])){
        $sql="select * from tintuc where chuyenmuc_id = '$id_chuyenmuc'";
        $stmt = $conn->prepare($sql);
        $query=$stmt->execute();
        $result = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $result[]=$row;
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



            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">ten</th>
                        <th scope="col">chude_id</th>
                        <th scope="col">mota</th>
                        <th scope="col">sotutoithieu</th>
                        <th scope="col">capdotoithieu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($result as $items): ?>
                    <tr>
                        <!-- <th scope="row">1</th> -->
                        <td><?php echo $items['id'] ?></td>
                        <td><?php echo $items['tacgia_id'] ?></td>
                        <td><?php echo $items['chuyenmuc_id'] ?></td>
                        <td><?php echo $items['tieude'] ?></td>
                        <td><?php echo $items['motangan'] ?></td>
                        <td><?php echo $items['noidung'] ?></td>                   
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <a href="addtintuc.php?id=<?php echo $id_chuyenmuc ?>"> them moi</a>
        </div>
    </content>
    <footer style="text-align: center">anh-8689</footer>




    <!-- 

    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>  -->
</body>

</html>