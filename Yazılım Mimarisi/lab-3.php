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
    $toplam=0;
    $toplam2=0;
    for($i=1; $i<=1000; $i++){
        $toplam = $i+$toplam;
        $tmp = $i;
        $tmp = ($tmp**2);
        $toplam2 = $tmp+$toplam2;
    }
    echo "İşlem Sonucu : ".(($toplam**2)-$toplam2)."<br>";
    yazi(1);
    function yazi($bas){
        $arr = array
        (
           "1" => array("Ey","Yükselen","Yeni","Nesil!"),
           "2" => array("İstikbal","Sizindir."),
           "3" => array("Cumhuriyeti","Biz","Kurduk","Onu"),
           "4" => array("Devam","Ettirecek","Sizlersiniz.")
        );
        $dizi = count($arr);
        $dizi1 = count($arr[1]);
        $dizi2 = count($arr[2]);
        $dizi3 = count($arr[3]);
        $dizi4 = count($arr[4]);
        if($bas<=$dizi){
            $i=0;
            foreach($arr[$bas] as $val){
          echo  " ".$i." : ".$val."<br>";
          $i++;
            }
            yazi($bas+1);
        }
       
    }
    $toplam=1;
for($i=1;$i<=100;$i++){
    $toplam = bcmul($toplam,$i);
}
$arr2 = str_split($toplam);
echo array_sum($arr2); 
    ?>
</body>
</html>