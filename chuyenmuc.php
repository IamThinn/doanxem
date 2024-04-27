<?php
    include'connect.php';
    if(empty($_POST['submit'])){
        $sql="select * from chuyenmuc";
        $stmt = $conn->prepare($sql);
        $query=$stmt->execute();
        $result = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $result[]=$row;
        }
    }

    else{
        $timkiem=$_POST['timkiem'];
        $sql="select * from chuyenmuc where ten like '%$timkiem%'";
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

            <form method="post">
                <!-- <label for="timkiem">Tim Kiem</label> -->
                <input type="text" name="timkiem" placeholder="Nhap ten chuyen muc">
                <input type="submit" name="submit" value="Tim">

            </form>


            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">ten</th>
                        <th scope="col">chude_id</th>
                        <th scope="col">mota</th>
                        <th scope="col">sotutoithieu</th>
                        <th scope="col">capdotoithieu</th>
                        <th scope="col">Hanh dong</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($result as $items): ?>
                    <tr>
                        <!-- <th scope="row">1</th> -->
                        <td><?php echo $items['id'] ?></td>
                        <td><?php echo $items['ten'] ?></td>
                        <td><?php echo $items['chude_id'] ?></td>
                        <td><?php echo $items['mota'] ?></td>
                        <td><?php echo $items['sotutoithieu'] ?></td>
                        <td><?php echo $items['capdotoithieu'] ?></td>                   
                        <td><a href="tintuc.php?id=<?php echo $items['id'] ?>">Them moi</a></td>                   
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </content>
    <footer style="text-align: center">anh-8689</footer>




    <!-- 

      -->
</body>

</html>