<?php
include 'dbConnect.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $inputID = $_POST['inputID'];
    $inputName = $_POST['inputName'];
    $inputDepartment = $_POST['inputDepartment'];
    $inputContact = $_POST['inputContact'];

    if(!empty($inputID) AND !empty($inputName) AND !empty($inputDepartment) AND !empty($inputContact)){
        $sql = "INSERT INTO information (ID, Name, Department, Contact) VALUES ('$inputID', '$inputName', '$inputDepartment', '$inputContact')";
        
        if($conn -> query($sql) === TRUE){
            echo "New record created successfully";
        } else {
            echo $conn -> error;
        }
        $conn -> close();
    }
}
?>

<script>
    setTimeout(function() => {
        window.location.href = "home.html";
    }, 200);
</script>