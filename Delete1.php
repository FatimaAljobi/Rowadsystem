<!-- صفحة كود الحذف -->

<?php
if( isset($_GET["id"])){
  $id = $_GET["id"];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "rowaddb";

  // // Create connection
  $conn =new mysqli($servername, $username, $password, $dbname);
  // // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql ="DELETE FROM participants WHERE id=$id";
  $conn->query($sql);
  }

  header("location:Edit&Delete.php");
              exit;
?>