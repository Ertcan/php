<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ogrenci";
    $conn = new mysqli($servername,$username,$password,$dbname);
    if(!$conn){
        echo "Hata ",mysqli_connect_error();
    }
    ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Öğrenci Numarası</th>
      <th scope="col">Ad</th>
      <th scope="col">Soyad</th>
      <th scope="col">vize</th>
      <th scope="col">final</th>
      <th scope="col">ortalama</th>
    </tr>
  </thead>
  <tbody>
      <?php
  $sql = "select ogrenci.ogrno,ad,soyad,vize,final,(vize*0.4+final*0.6) as ortalama from ogrenci, notlar where (ogrenci.ogrno=notlar.ogrno)";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)) {
            if($row["ortalama"]<50){
                echo '<tr class="table-danger">';
            }else {
                echo '<tr class="table-success">';
            }
            echo'<th scope="row">'.'<a href="lab-4-2.php?ogr_no='.$row["ogrno"].'">'.$row["ogrno"].'</a>'."</th>"."<td>".$row["ad"]."</td>"."<td>".$row["soyad"]."</td>"."<td>".$row["vize"]."</td>"."<td>".$row["final"]."</td>"."<td>".$row["ortalama"]."</td></tr>" ; 
            
        }
    }else{
        echo "Sonuç yok.";
    }?>

  </tbody>
</table>
</body>
</html>