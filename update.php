<?php 

    require_once('db.php');

    if(isset($_POST['btnSave'])){

        $id = $_POST ['user_id'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST ['password'];

        $sql = "UPDATE `users` SET `name` = '$name', `username` =
        '$username', `password` = '$password' WHERE id ='$id'";
        $conn->exec($sql);

        $_SESSION["message"] = "Record update Succesfully";

        header('Location: users.php');
    }