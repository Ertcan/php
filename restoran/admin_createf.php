<?php
    require "libs/functions.php";
    require "views/_header.php";
    require "views/_navbar.php";
         
         $_SESSION['type'] = "success";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
            $uploadDir = "img/";
            $uploadFile = $uploadDir . basename($_FILES["file"]["name"]);
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadFile)) {
                $_SESSION['message']  =   "Dosya başarıyla yüklendi: " . htmlspecialchars(basename($_FILES["file"]["name"]));
                $_SESSION['type'] = "success";
            } else {
                echo "Dosya yükleme hatası.";
            }
        } else {
            echo "Geçersiz dosya.".$_FILES["file"]["error"] ;
        }
    
        header('Location: admin_panel.php');
    }
?>
<div class="container my-3">

<div class="row">
    
    <div class="col-12">
        <h1 class="text-danger">Dikkat yüklencek dosyanın ismi kayıt yaparken önem taşır lütfen ismini unutmayınız!</h1>
       <div class="card">

            <div class="card-body">
                <form enctype="multipart/form-data" method="POST">
                    <div class="mb-3">
                            <label for="file" class="form-label">Fotoğraf Yükle</label>
                            <input type="file"  name="file" id="file"  class="form-control bg-dark text-light" >
                    </div>

                            <input type="submit" value="Oluştur" class="btn btn-primary">

                    
                </form>
                </div>
            </div>

        </div>    
    
    </div>

</div>
<?php require "views/_footer.php"; ?>
</body>
</html>