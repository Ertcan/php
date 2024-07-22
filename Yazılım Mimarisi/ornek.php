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
    // $sql="insert into ogrenci (`ogrno`, `ad`, `soyad`, `bolumu`, `giris_yili`, `sifre`)  VALUES ('1200505055', 'Ertuğrul', 'Candan', 1, '2020-09-10', '123456')";
    // if(mysqli_query($conn,$sql)){
    //     echo "Kayıt Oluşturuldu";
    // }else{
    //     echo "Hata";
    // }
        $sql = "select dersadi,sicil_no,ad,soyad,unvani from dersler, hocalar where (dersler.dersi_veren=hocalar.sicil_no) and kredi = 4";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {
                echo "<br> Ders Adı : ".$row["dersadi"]."<br> sicil_no : ".$row["sicil_no"]."<br> Ad : ".$row["ad"]."<br> Soyad : ".$row["soyad"]."<br> Unvanı : ".$row["unvani"]; 
            }
        }else{
            echo "Sonuç yok.";
        }
    ?>
</body>
</html>