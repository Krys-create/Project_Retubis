<?php
require_once ("db.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DBMS</title>
    </head>
    <body>
        <?php
        $name = "";
        $username = "";
        $password = "";
        if((isset($_GET['action']) && $_GET['action'] == 'edit')){

            $sql = "SELECT * FROM users WHERE id=".$_GET['id'];
            $stmt = $conn->prepare($sql);
            $stmt ->execute();
            
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $user = $stmt->fetch();

            $name = $user['name'];
            $username = $user['username'];
            $password = $user['password'];
        }
        ?>

        <h3>
            <?php
            echo (isset($_GET['action']) && $_GET['action'] == 'edit') ?
            "Edit User" : "Add User";
            ?>
        <form action="<?php echo isset ($_GET['id']) ? 'update.php' : 'save.php' ?>" method = "POST">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $name; ?>">
            <br>
            <label for="username">Username:</label>
            <input type="text" name="username" value = "<?php echo $username; ?>">
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" value="<?php echo $password; ?>">
            <br><br>
            <button type="submit" name="btnSave">Save</button>
        </form>
    </body>
</html>