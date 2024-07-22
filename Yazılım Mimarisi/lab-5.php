<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="w-50">
<?php
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "lab-5";
    $conn = new mysqli($servername,$username,$password,$dbname);
    if(!$conn){
        echo "Hata ",mysqli_connect_error();
    }
    ?>
<form action="lab-5.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ad</label>
    <input type="text" name="ad" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Soyad</label>
    <input type="text" name="soyad" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
      <label for="" class="form-label">Yorumunuz</label>
      <textarea  name="yorum"  cols="30" rows="10" class="form-control"></textarea>
  </div>
  <div class="mb-3 form-check">
    <select class="form-control" name="puan">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php

$sql = "select * from deneme";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h5>'.$row["ad"].' '.$row["soyad"].'</h5>
            </div>
            <div class="card-body">
                <div class="text-muted">'.$row["tarih"].' Puanı: '.$row["puan"].'</div>
                <p >'.$row["yorum"].'</p>
            </div>
            <div class="card-footer">
                <p>'.$row["mail"].'</p>
            </div>
        </div>
    </div>';
    }
}

$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$tarih = date("m.d.y");
$yorum = $_POST["yorum"];
$puan = $_POST["puan"];
$mail = $_POST["mail"];


$stmt = $conn -> prepare("insert into deneme (ad,soyad,tarih,puan,yorum,mail) values(?,?,?,?,?,?)");
$stmt -> bind_param("ssssss", $ad, $soyad, $tarih,$puan,$yorum,$mail);

$stmt->execute();
$stmt ->close();
$conn -> close();

?>

</body>
</html>