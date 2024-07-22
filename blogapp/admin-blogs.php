<?php

    require "libs/vars.php";
    require "libs/functions.php";  

?>

<?php include "views/_header.php" ?>
<?php include "views/_message.php" ?>
<?php include "views/_navbar.php" ?>

<div class="container my-3">

    <div class="row">

        <div class="col-12">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 80px;">Image</th>
                        <th>Title</th>
                        <th>Url</th>
                        <th style="width: 30px;">Likes</th>
                        <th style="width: 30px;">Comments</th>
                        <th style="width: 100px;">is active</th>
                        <th style="width: 130px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach(getData()["movies"] as $movie): ?>
                        <tr>
                            <td>
                                <img src="img/<?php echo $movie["image-url"]?>" alt="" class="img-fluid">
                            </td>
                            <td><?php echo $movie["title"]?></td>
                            <td><?php echo $movie["url"]?></td>
                            <td><?php echo $movie["likes"]?></td>
                            <td><?php echo $movie["comments"]?></td>
                            <td>
                                <?php if($movie["is-active"]): ?>
                                    <i class="fas fa-check"></i>
                                <?php else: ?>
                                    <i class="fas fa-times"></i>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="blog-edit.php?id=<?php echo $movie["id"]?>">edit</a>
                                <a class="btn btn-danger btn-sm" href="blog-delete.php?id=<?php echo $movie["id"]?>">delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            

        </div>    
    
    </div>

</div>

<?php include "views/_footer.php" ?>

