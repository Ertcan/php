<?php
session_start();
function get_data(){
    $myfile = fopen("data.json","r");
    $size = filesize("data.json");
    $result = json_decode(fread($myfile,$size),true);
    fclose($myfile);
    return $result;
}
function get_dataid($id){
    
    foreach (get_data()["destinations"] as $item) {
        if (isset($item['id']) && $item['id'] == $id) {
            
            return $item;
}
    }
}
function get_dataid_hakkinda($id){
    
    foreach (get_data()["hakkinda"] as $item) {
        if (isset($item['id']) && $item['id'] == $id) {
            
            return $item;
}
    }
}
function get_dataid_nasil($id){
    
    foreach (get_data()["nasil"] as $item) {
        if (isset($item['id']) && $item['id'] == $id) {
            
            return $item;
}
    }
}
function edit_data(int $id, string $title, string $description, string $image) {
    $db = get_data();

    foreach($db["destinations"] as &$item) {
        if ($item["id"] == $id) {

            $item["name"] = $title;
            $item["description"] = $description;
            $item["image"] = $image;

            $myfile = fopen("data.json","w");
            fwrite($myfile, json_encode($db, JSON_PRETTY_PRINT));
            fclose($myfile);

            break;
        }
    }
}
function edit_data_hakkinda(int $id, string $title, string $description, string $title2) {
    $db = get_data();

    foreach($db["hakkinda"] as &$item) {
        if ($item["id"] == $id) {

            $item["title"] = $title;
            $item["description"] = $description;
            $item["title2"] = $title2;

            $myfile = fopen("data.json","w");
            fwrite($myfile, json_encode($db, JSON_PRETTY_PRINT));
            fclose($myfile);

            break;
        }
    }
}
function edit_data_nasil(int $id, string $title, string $description, string $slug) {
    $db = get_data();

    foreach($db["nasil"] as &$item) {
        if ($item["id"] == $id) {

            $item["name"] = $title;
            $item["description"] = $description;
            $item["slug"] = $slug;

            $myfile = fopen("data.json","w");
            fwrite($myfile, json_encode($db, JSON_PRETTY_PRINT));
            fclose($myfile);

            break;
        }
    }
}
function delete_data(int $id) {
    $db = get_data();

    foreach($db["destinations"] as $key => $item) {
        if($item['id'] === $id) {
            array_splice($db["destinations"],$key,1);
        }
    }
    $myfile = fopen("data.json","w");
    fwrite($myfile, json_encode($db, JSON_PRETTY_PRINT));
    fclose($myfile);
}
function delete_data_nasil(int $id) {
    $db = get_data();

    foreach($db["nasil"] as $key => $item) {
        if($item['id'] === $id) {
            array_splice($db["nasil"],$key,1);
        }
    }
    $myfile = fopen("data.json","w");
    fwrite($myfile, json_encode($db, JSON_PRETTY_PRINT));
    fclose($myfile);
}
function delete_data_belge(int $id) {
    $db = get_data();

    foreach($db["belge"] as $key => $item) {
        if($item['id'] === $id) {
            array_splice($db["belge"],$key,1);
        }
    }
    $myfile = fopen("data.json","w");
    fwrite($myfile, json_encode($db, JSON_PRETTY_PRINT));
    fclose($myfile);
}
function create_data(string $title, string $description, string $imageUrl) {
    $db = get_data();
    array_push($db["destinations"], array(
       "id" => count($db["destinations"]) + 1,
       "name" => $title,
       "description" => $description,
       "image" => $imageUrl,

    ));
    $myfile = fopen("data.json","w");
    fwrite($myfile, json_encode($db, JSON_PRETTY_PRINT));
    fclose($myfile);
}
function create_data_nasil(string $title, string $description, string $slug) {
    $db = get_data();
    array_push($db["nasil"], array(
       "id" => count($db["nasil"]) + 1,
       "name" => $title,
       "description" => $description,
       "slug" => $slug,

    ));
    $myfile = fopen("data.json","w");
    fwrite($myfile, json_encode($db, JSON_PRETTY_PRINT));
    fclose($myfile);
}

?>