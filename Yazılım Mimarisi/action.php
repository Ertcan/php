<?php
        $kenar1;
        $kenar2;
        $hipo;
        $kenar1 = $_POST["kenar1"];
        $kenar2 = $_POST["kenar2"];
        $hipo = $_POST["hipo"];
        function kenar2bul($kenar1,$kenar2,$hipo){
            $kenar2 = sqrt(($hipo**2)-($kenar1**2));
            return $kenar2;
         }
         function hipotenusbul($kenar1,$kenar2,$hipo){
            $hipo = sqrt(($kenar1**2)+($kenar2**2));
            return $hipo;
         }
         if(($kenar1==null)&&($kenar2!=null)&&($hipo!=null)){
             echo kenar2bul($kenar1,$kenar2,$hipo);
         }else if(($kenar2==null)&&($kenar1 != null)&&($hipo != null)){
             echo kenar2bul($kenar1,$kenar2,$hipo);
         }else if(($hipo==null)&&($kenar1 != null)&&($kenar2 != null)){
             echo hipotenusbul($kenar1,$kenar2,$hipo);
         }else{
             echo "Hatalı Giriş !";
         }
        ?>