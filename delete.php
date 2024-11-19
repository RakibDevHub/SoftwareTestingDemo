<?php 
include "dbConnect.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $sql = "DELETE FROM information WHERE ID = '$id'";
    $conn->query($sql);
    header("Location:showData.php");
}
?>