<?php
require "libs/functions.php";
require "views/_header.php";
require "views/_navbar.php";
include "views/_message.php" 
?>

<div class="container my-3">

    <div class="row">
    <h1 class="text-center">YEMEK PAKETLERİ</h1>
        <div class="col-12">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 80px;">Fotoğraf</th>
                        <th>Başlık</th>
                        <th style="width: 130px;"><a class="btn btn-success btn-sm" href="admin_create.php">Oluştur</a></th>
                     
                      
                    </tr>
                </thead>
                <tbody>
                    <?php foreach(get_data()["destinations"] as $kategori): ?>
                        <tr>
                            <td>
                                <img src="img/<?php echo $kategori["image"]?>" alt="" class="img-fluid">
                            </td>
                            <td><?php echo $kategori["name"]?></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="admin_edit.php?id=<?php echo $kategori["id"]?>">Edit</a>
                                <a class="btn btn-danger btn-sm" href="admin_Delete.php?id=<?php echo $kategori["id"]?>">Sil</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a class="btn btn-success btn-sm" href="admin_createf.php">Fotoğraf Yükle</a>
            <a class="btn btn-success btn-sm" href="admin_createb.php">Belge Yükle</a>
            <a class="btn btn-success btn-sm" href="admin_edit_hakkinda.php?id=1">Ne Fit Nedir Güncelle</a>
        </div>    
        <h1 class="text-center">NASIL OLUYOR?</h1>        
        <div class="col-12">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 80px;">Sıralama</th>
                        <th>Başlık</th>
                        <th style="width: 130px;"><a class="btn btn-success btn-sm" href="admin_create_nasil.php">Oluştur</a></th>
                     
                      
                    </tr>
                </thead>
                <tbody>
                    <?php foreach(get_data()["nasil"] as $nasil): ?>
                        <tr>
                            <td>
                                <?php echo $nasil["slug"]?>
                            </td>
                            <td><?php echo $nasil["name"]?></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="admin_editnasil.php?id=<?php echo $nasil["id"]?>">Edit</a>
                                <a class="btn btn-danger btn-sm" href="admin_Delete_nasil.php?id=<?php echo $nasil["id"]?>">Sil</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>

<?php require "views/_footer.php"; ?>
</body>
</html>