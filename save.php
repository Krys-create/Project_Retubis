<?php
    // Import DB file
    require_once('db.php');

    if(isset($_POST['btnSave'])){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO `users`  (`name`, `username`, `password`)
        VALUES ('$name', '$username', '$password')";
        $conn->exec($sql);
        //echo "New record created successfully";
        
        $_SESSION["message"] = "New Record Created Successfuly";

        

        header('Location: users.php');
    }
?>