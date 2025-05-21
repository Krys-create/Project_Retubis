<?php
require_once("db.php");
?>
<h3>Users</h3>
<?php
if(isset($_SESSION['message'])){
    echo "<span>".$_SESSION['message']."</span>";
    $_SESSION['message'] = null;
}
echo "<table border='1px'>";
echo "<tr>";
    echo "<td>Name</td>";
    echo "<td>Username</td>";
    echo "<td>Actions</td>";
echo "</tr>";
try {
    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
  
  
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $users = $stmt->fetchAll();
    foreach($users as $user) {
        echo "<tr>";
            echo "<td>".$user['name']."</td>";
            echo "<td>".$user['username']."</td>";
            echo "<td>
                    <a href='index.php?action=edit&id=".$user['id']."'>
                    Edit
                    </a>
                    <a href='delete.php?id=".$user['id']."'>
                    <button>Delete</button>
                    </a>
                </td>";
        echo "</tr>";
    }
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  echo "</table>";