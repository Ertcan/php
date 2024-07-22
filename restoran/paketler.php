<?php
require "libs/functions.php";
require "views/_header.php";
require "views/_navbar.php";
$id = $_GET["id"];
    if(!isset($_GET["id"]) or !is_numeric($_GET["id"])) {
        header('Location: index.php');
    }
    $result = get_dataid($id);
?>
 <div class="jumbotron mb-2 pt-4 card">
        <h1  class="text-dark text-center hero-text"><?php echo $result["name"] ?></h1>
        <hr>
    </div>
    <img src="img/<?php echo $result["image"] ?>" class="img-fluid" style="width: 100%; height: auto;">
    <div class="row">
        <div class="col">
            <div class="container">
                <div class="card">
                <div class="card-body">
                    <p class="card-text"><?php echo $result["description"] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="foot py-5 mt-2 text-white text-center" id="foot">
              <div class="row">
                <div class="col-md-6">
                  <div class="container">
                    <img src="img/20.png" style="width: 150px; height: auto;" alt="">
              <div style="display: flex; justify-content: center;  margin: 2rem;">
                <div class="cards">
                  <h4 class="text-white">Sosyal Medya</h4>
                <a href="https://www.instagram.com/nefityemek/" class="neon-button btn-sm mt-2">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>İnstagram</a>
        
                
                
              </div></div>
             
             
             </div></div>
            <div class="col-md-6">
              <div style="display: flex; justify-content: center;  margin: 2rem;">
              <div class="cards">
                <h4 class="text-white">Adres</h4>
                <p class="text-white">Erkmen Belediyesi Cumhuriyet Mah. Doç. Dr. Said Açba Cad. No:4/1 (Erkmen Belediyesi Çaprazı) Merkez/Afyonkarahisar</p>
                <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=Cumhuriyet%20Mah.%20Do%C3%A7.%20Dr.%20Said%20A%C3%A7ba%20Cad.%20no:4/1,%2003032%20Afyonkarahisar%20ne%20&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 300px; height: 250px;"></iframe><style>.mapouter{position:relative;height:250px;width:300px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-login/">blooket login</a><style>.gmap_canvas{overflow:hidden;height:250px;width:300px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
              </div></div>
            </div> 
            <span>Copyright © AKT Yazılım Medya 2021 </span><span class="text-muted">AKT Yazılım Medya</span>
            </div>
           </footer>
           <?php require "views/_footer.php"; ?>
</body>
</html>