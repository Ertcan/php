<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
      <th scope="col">Bölümü</th>
      <th scope="col">Giriş Yılı</th>
    </tr>
  </thead>
  <tbody>
      <?php
  $ogrno = $_GET["ogr_no"];
  echo "Gelenn".$_GET["ogr_no"]."değişkenn". $ogrno;
  $sql =("select ogrenci.ogrno,ad,soyad,bolumu,giris_yili from ogrenci where ogrno = $ogrno");
  $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)) {
        echo'<th scope="row">'.$row["ogrno"]."</th>"."<td>".$row["ad"]."</td>"."<td>".$row["soyad"]."</td>"."<td>".$row["bolumu"]."</td>"."<td>".$row["giris_yili"]."</td>"."</tr>" ; 

    }
}else{
    echo "Sonuç yok.";
}
        ?>
  </tbody>
</table>
</body>
</html>