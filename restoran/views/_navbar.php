<nav class="navbar navbar-expand-md  navpos">
        <a href="index.php" class="navbar-brand d-flex px-5 d-inline text-nowrap"><img src="img/indir.jfif" style="width: 250px; height: auto;" ></a>
            <button class="navbar-toggler sagayasla" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>         
            <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-renk" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              UMRE PAKETLERİ
            </a>
            <ul class="dropdown-menu text-renk">
            <?php foreach(get_data()["destinations"]as $kategori): ?>
                <li><a class="dropdown-item" href='paketler.php?id=<?php echo $kategori["id"];?>'><?php echo "".$kategori["name"] ?></a></li>
            <?php endforeach; ?>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="hakkında.php" class="nav-link mx-1 text-renk">| HAKKIMIZDA</a>
          </li>
          <li class="nav-item ">
            <a href="nasil_oluyor.php" class="nav-link mx-auto mx-1 text-renk">| SIKÇA SORULAN SORULAR</a>
          </li>
          <li class="nav-item ">
            <a href="iletisim.php" class="nav-link mx-auto mx-1 text-renk">| İLETİŞİM</a>
          </li>
        </ul>
      
      </div>
      </nav>