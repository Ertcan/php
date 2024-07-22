<?php
require "libs/functions.php";
require "views/_header.php";
require "views/_navbar.php";
?> 
  <img src="img/nasil_oluyor.png" class="img-fluid" style="width: 100%; height: auto;">
<div class="container">
<div class="accordion accordion-flush"  id="accordionExample">
<?php foreach(get_data()["nasil"]as $kategori): ?>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo "#", $kategori["slug"]; ?>" aria-expanded="false" aria-controls="<?php echo $kategori["slug"]; ?>">
       <?php echo $kategori["name"]; ?>
      </button>
    </h2>
    <div id="<?php echo $kategori["slug"]; ?>" class="accordion-collapse collapse"  data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong><?php echo $kategori["description"]; ?>
      </div>
    </div>
  </div> <?php endforeach; ?>
</div>
</div>
<footer class="foot py-5 mt-2 text-white text-center" id="foot">
    <img src="img/logo.png" style="width: 150px; height: auto;" alt="">
      <span>Copyright © AKT Yazılım Medya 2021 </span><span class="text-muted">AKT Yazılım Medya</span>
</footer>
<?php require "views/_footer.php"; ?>
</body>
</html>