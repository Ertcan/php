<?php
require "libs/functions.php";
require "views/_header.php";
require "views/_navbar.php";
?>

<div class="jumbotron mb-2 pt-4 card">
        <h1  class="text-dark text-center hero-text">FRANCHISE</h1>
        
    </div>
    <div class="container">
        <form action="https://formspree.io/f/mnqevjlr" method="POST" class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Ad Soyad</label>
    <input type="text" name="adsoyad" class="form-control text-bg text-light" id="validationCustom01" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">E-Posta</label>
    <input type="email" name="email" class="form-control text-bg text-light" id="validationCustom03" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom05" class="form-label">Konu</label>
    <input type="text" aria-describedby="konu" name="konu" class="form-control text-bg text-light" id="validationCustom05" required>
  </div>
  <div class="col-md-12">
    <label for="validationTextarea" class="form-label">Mesajınız</label>
    <textarea class="form-control  text-bg text-light" name="mesaj" id="validationTextarea" required></textarea>
  </div>
  
  <div class="col-12">
    <button class="btn text-bg" type="submit">Gönder</button>
  </div>
</form></div>

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