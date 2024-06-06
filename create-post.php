<?php
    $localhost = "localhost";
    $user = "root";
    $pass = "usbw";
    $bdname = "blgames";

    $db = new mysqli($localhost, $user, $pass, $bdname);

    if($db->connect_error){
        die("Database Error: ". $db->connect_error);
    }

    $name = $_POST['title'];
    $image = $_POST['image'];
    $description = $_POST['description'];

    $sql = "INSERT INTO posts (title, image, description) VALUES ('$name', '$image', '$description')";

    if($db->query($sql) === true){
        header("Location: index.php");
    } else {
        header("Location: 404.php");
    }

    $db->close();
?>