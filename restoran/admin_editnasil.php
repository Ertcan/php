<?php
require "libs/functions.php";
require "views/_header.php";
require "views/_navbar.php";

$id = $_GET["id"];
    $kat = get_dataid_nasil($id);
    

    if ($_SERVER["REQUEST_METHOD"]=="POST") {

        $name = $_POST["name"];
        $description = $_POST["description"];
        $slug = $_POST["slug"];

        edit_Data_nasil($id, $name, $description, $slug);
    
        $_SESSION['message'] = $name." isimli nasil oluyor güncellendi.";
        $_SESSION['type'] = "success";

        header('Location: admin_panel.php');
    }
?>
<div class="container my-3">

<div class="row">
    
    <div class="col-12">

       <div class="card">
       
            <div class="card-body">
                <form method="POST">

                    <div class="mb-3">
                        <label for="name" class="form-label">İsim</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $kat["name"]?>">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Açıklama</label>
                        <textarea name="description" id="description" style="width: 100%; height: 300px;" class="form-control"><?php echo $kat["description"]?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">takma isim</label>
                        <input type="text" class="form-control" name="slug" id="slug" value="<?php echo $kat["slug"]?>">
                    </div>

                    

                    <input type="submit" value="Uygula" class="btn btn-primary">

                
                </form>
            </div>
        </div>

    </div>    

</div>

</div>

<?php require "views/_footer.php"; ?>
</body>
</html>