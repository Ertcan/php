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
                $db = get_data();
                array_push($db["belge"], array(
                "id" => count($db["belge"]) + 1,
                "image" => $_FILES["file"]["name"],

                ));
            $myfile = fopen("data.json","w");
            fwrite($myfile, json_encode($db, JSON_PRETTY_PRINT));
            fclose($myfile);
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
<div class="row">
    <h1 class="text-center">Yüklü Belgeler</h1>
        <div class="col-12">           
                    <?php foreach(get_data()["belge"] as $kategori): ?>        
                                <img src="img/<?php echo $kategori["image"]?>"class="img-fluid">
                                <a class="btn btn-danger btn-sm" href="admin_Deleteb.php?id=<?php echo $kategori["id"]?>">Sil</a>
                    <?php endforeach; ?>
                </tbody>
            </table>
<?php require "views/_footer.php"; ?>
</body>
</html>