<?php
session_start();
$servername = "localhost"; //127.0.0.1
$username = "student"; //default: root
$password = "password123"; // (blank)
$database = "blog_db";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>