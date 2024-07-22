<?php
    require "libs/functions.php";
    require "views/_header.php";
    require "views/_navbar.php";

    if ($_SERVER["REQUEST_METHOD"]=="POST") {

        $name = $_POST["name"];
        $description = $_POST["description"];
        $image = $_POST["image"];
        
        create_data($name, $description, $image);
        
        $_SESSION['message'] = $name." isimli kategori eklendi";
        $_SESSION['type'] = "success";

        header('Location: admin_panel.php');
    }
?>

<div class="container my-3">

    <div class="row">
        
        <div class="col-12">

           <div class="card">
           
                <div class="card-body">
                    <form action="admin_create.php" method="POST">

                        <div class="mb-3">
                            <label for="name" class="form-label">Başlık</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Açıklama</label>
                            <textarea name="description" id="description" style="width: 100%; height: 300px;" class="form-control"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">imageUrl</label>
                            <input type="text" class="form-control" name="image" id="image">
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