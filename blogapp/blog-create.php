<?php
    require "libs/vars.php";
    require "libs/functions.php";  

    if ($_SERVER["REQUEST_METHOD"]=="POST") {

        $title = $_POST["title"];
        $description = $_POST["description"];
        $imageUrl = $_POST["imageUrl"];
        $url = $_POST["url"];

        createBlog($title, $description, $imageUrl, $url);
        
        $_SESSION['message'] = $title." isimli blog eklendi";
        $_SESSION['type'] = "success";
        
        header('Location: admin-blogs.php');
    }
?>

<?php include "views/_header.php" ?>
<?php include "views/_navbar.php" ?>

<div class="container my-3">

    <div class="row">
        
        <div class="col-12">

           <div class="card">
           
                <div class="card-body">
                    <form action="blog-create.php" method="POST">

                        <div class="mb-3">
                            <label for="title" class="form-label">title</label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">description</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="imageUrl" class="form-label">imageUrl</label>
                            <input type="text" class="form-control" name="imageUrl" id="imageUrl">
                        </div>

                        <div class="mb-3">
                            <label for="url" class="form-label">url</label>
                            <input type="text" class="form-control" name="url" id="url">
                        </div>

                        <input type="submit" value="Submit" class="btn btn-primary">

                    
                    </form>
                </div>
            </div>

        </div>    
    
    </div>

</div>

<?php include "views/_footer.php" ?>

