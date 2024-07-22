<?php


function getData() {
    $myfile = fopen("db.json","r");
    $size = filesize("db.json");
    $result = json_decode(fread($myfile, $size), true);
    fclose($myfile);
    return $result;
}

function createUser(string $name,string $username,string $email,string $password) {
    $db = getData();
    array_push($db["users"], array(
       "id" => count($db["users"]) + 1,
       "username" => $username,
       "password" => $password,
       "name" => $name,
       "email" => $email  
    ));
    $myfile = fopen("db.json","w");
    fwrite($myfile, json_encode($db, JSON_PRETTY_PRINT));
    fclose($myfile);
}

function getUser(string $username) {
    $users = getData()["users"];

    foreach($users as $user) {
        if($user["username"] == $username) {
            return $user;
        }
    }
    return null;
}

function createBlog(string $title, string $description, string $imageUrl,string $url, int $comments=0,int $likes=0) {
    $db = getData();
    array_push($db["movies"], array(
       "id" => count($db["movies"]) + 1,
       "title" => $title,
       "description" => $description,
       "image-url" => $imageUrl,
       "url" => $url,
       "likes" => $likes,
       "comments" => $comments  ,
       "is-active" => false
    ));
    $myfile = fopen("db.json","w");
    fwrite($myfile, json_encode($db, JSON_PRETTY_PRINT));
    fclose($myfile);
}

function getBlogById(int $movieId) {
    $movies = getData()["movies"];

    foreach($movies as $movie) {
        if($movie["id"] == $movieId) {
            return $movie;
        }
    } 

    return null;
}

function editBlog(int $id, string $title, string $description, string $imageUrl,string $url, bool $isActive) {
    $db = getData();

    foreach($db["movies"] as &$movie) {
        if ($movie["id"] == $id) {

            $movie["title"] = $title;
            $movie["description"] = $description;
            $movie["image-url"] = $imageUrl;
            $movie["url"] = $url;
            $movie["is-active"] = $isActive;

            $myfile = fopen("db.json","w");
            fwrite($myfile, json_encode($db, JSON_PRETTY_PRINT));
            fclose($myfile);

            break;
        }
    }
}

function deleteBlog(int $id) {
    $db = getData();

    foreach($db["movies"] as $key => $movie) {
        if($movie['id'] === $id) {
            array_splice($db["movies"],$key,1);
        }
    }

    $myfile = fopen("db.json","w");
    fwrite($myfile, json_encode($db, JSON_PRETTY_PRINT));
    fclose($myfile);
}

function kisaAciklama($aciklama, $limit) {
    if (strlen($aciklama) > $limit) {
        echo substr($aciklama,0,$limit)."...";
    } else {
        echo $aciklama;
    };
}
?>