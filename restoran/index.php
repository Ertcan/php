<?php
require "libs/functions.php";
require "views/_header.php";
require "views/_navbar.php";
?>

    <section>
      
    <div class="slideshow-container">

      
<div class="mySlides fade2">
  <div class="numbertext">1 / 3</div>
  <img src="img/s-1.png" class="img-fluid" style="width: 100%; height: auto;">
  <div class="text">NeFit</div>
</div>

<div class="mySlides fade2">
  <div class="numbertext">2 / 3</div>
  <img src="img/s-2.png" class="img-fluid" style="width: 100%; height: auto;">
  <div class="text">NeFit</div>
</div>

<div class="mySlides fade2">
  <div class="numbertext">3 / 3</div>
  <img src="img/s-3.png" class="img-fluid" style="width: 100%; height: auto;">
  <div class="text">NeFit</div>
</div>


<a class="prev text-dark" onclick="plusSlides(-1)">&#10094;</a>
<a class="next text-dark" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>


<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>
    </section>
  <div class="container mt-2 text-center hero-text"><div class="col-md-12">
    <div class="row"><img src="img/diyet.jpg" class="mx-auto" style="width: 700px; height: auto;"   ></div></div>
    <div class="row mt-5">
      <div class="col-md-6 banner-img">

          <img src="img/kutu.png"  style="width: auto; height: 200px;" class="img-fluid card-img-top ">
                        
                        <div class="card-body text-center banner-text">
                          <a type="button" data-bs-target="#exampleModal"  data-bs-toggle="modal" class="neon-button btn-lg mt-2">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>Kutuda Neler Var</a>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">KUTUDA NELER VAR</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h2 class="fs-5 text-bg">SABAH KAHVALTILARI</h2>
      <div class="row">
      <?php foreach(get_data()["yanslider"]as $kategori): ?>
        <div class="col-md-4 kutu">
    <img src="images/<?php echo $kategori["image"];?>" class="img-fluid" style="width: 100%; height: auto;"></div>
<?php endforeach; ?>
        <hr>
        <h2 class="fs-5 text-bg">ET YEMEKLERİ</h2><hr>
        <?php foreach(get_data()["yanslider"]as $kategori): ?>
        <div class="col-md-4 kutu">
    <img src="images/<?php echo $kategori["image"];?>" class="img-fluid" style="width: 100%; height: auto;"></div>
<?php endforeach; ?>
        <h2 class="fs-5 text-bg">SEBZE VE SALATALAR</h2>
        <?php foreach(get_data()["yanslider"]as $kategori): ?>
        <div class="col-md-4 kutu">
    <img src="images/<?php echo $kategori["image"];?>" class="img-fluid" style="width: 100%; height: auto;"></div>
<?php endforeach; ?>
      </div></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>
      </div>
      <div class="col-md-6 banner-img">

        <img src="img/belge.jpg" style="width: auto; height: 200px;  "class="img-fluid card-img-top">
                    
                      <div  class="card-body text-center banner-text">
                        <a type="button" data-bs-target="#exampleModal2"  data-bs-toggle="modal" class="neon-button btn-lg mt-2">
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>Belgelerimiz</a>
                      </div>
          
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel2">BELGELERİMİZ</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach(get_data()["belge"]as $kategori): ?>
    <img src="img/<?php echo $kategori["image"];?>" class="img-fluid" style="width: 100%; height: auto;"><hr>
<?php endforeach; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>
                     
                    
                
    </div>
    
    <div class="row">
      <div id="carouselExampleControls" class="carousel hero-img">
        <div class="carousel-inner">
            <?php foreach(get_data()["yanslider"]as $slider): ?>
            <div class="carousel-item ">
                <div class="img-wrapper"><img src='<?php echo "images/".$slider["image"] ?>'class="d-block w-100" alt="..."> </div></div>
            <?php endforeach; ?>         
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
      </div>
    
    </div>
      <section id="about">
        <div class="about-text">
          <h1>Hakkında</h1>
          <p>
            Kişilere özel, diyetisyen tarafından planlanmış sağlıklı, lezzetli ve yenilikçi yemekler üretiyoruz. Bu yemekleri üretmekle kalmayıp adresinize teslim ediyoruz.
          </p>
          <a href="hakkında.php" class="btn btn-success">Hakkında</a>
        </div>
        <div class="img about-img">
          <img class="img-fluid"
            src="img/21.png"
            
          />
        </div>
      </section>
      
      <hr />
      <section id="about">
        <div class="about-text">
          <h2>İletişim</h2>
          <p>
            Müşteri memnuniyeti birinci önceliğimizdir. Hafta içi ve Cumartesi günü 08:00-18:00 saatleri arasında Müşteri Hizmetleri Departmanımıza ulaşabilirsiniz.
          </p>
          <a href="iletisim.php" class="btn btn-success">İletişim</a>
        </div>
        <div class="img about-img">
          <img class="img-fluid"
            src="img/19.png"
       
          />
        </div>
      </section> 
      </div>
    </div>
      
    
            <footer class="foot py-5 mt-2 text-white text-center" id="foot">
              <div class="row">
                <div class="col-md-6">
                  <div class="container">
                    
              <div style="display: flex; justify-content: center;  margin: 2rem;">
                <div class="cards">
                <img src="img/indir.jfif" style="width: 150px; height: auto;" alt="">
                  <h4 class="text-white">Sosyal Medya</h4>
                <a href="https://www.instagram.com/nefityemek/" class="neon-button btn-sm mt-2">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>İnstagram</a>
                        <a href="https://www.instagram.com/nefityemek/" class="neon-button btn-sm mt-2">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>Facebook</a>
                
                
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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <script src="data.js"></script>              
    <script type="text/javascript" src="vanilla-tilt.js"></script>
    <script type="text/javascript">
        VanillaTilt.init(document.querySelectorAll(".img-wrapper"), {
            max: 30,
            speed: 400
        });</script>
        <script type="text/javascript">
        VanillaTilt.init(document.querySelectorAll(".col-md-4"), {
            max: 60,
            speed: 200
        });</script>
</body>
</html>