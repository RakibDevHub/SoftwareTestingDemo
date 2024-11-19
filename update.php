<?php 
include "dbConnect.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $inputName = $_POST['inputName'];
    $inputDepartment = $_POST['inputDepartment'];
    $inputContact = $_POST['inputContact'];

    if(!empty($inputName) AND !empty($inputDepartment) AND !empty($inputContact)){
        $sql = "UPDATE information SET Name='$inputName', Department='$inputDepartment', Contact='$inputContact' WHERE ID='$id'";
        
        if($conn -> query($sql) === TRUE){
            echo "Record updated successfully";
        } else {
            echo $conn -> error;
        }
        $conn -> close();
    }
}
?>

<script>
    setTimeout(function(){
        window.location.href = "home.html";
    }, 200);
</script>