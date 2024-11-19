<?php 
include "dbConnect.php";
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql = "SELECT ID, Name, Department, Contact FROM information WHERE ID = '$id'";
    $result = $conn->query($sql);

    if($result){
        $row = $result->fetch_assoc();
    } else{
        echo"Not found!";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- <link rel="stylesheet" href="style.css" /> -->
        <title>Edit Form</title>
    </head>
    <body>
        <form action="update.php" id="dataForm" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['ID'];?>"/><br />
            <label for="inputText">Enter Name:</label>
            <input type="text" id="inputText" name="inputName" value="<?php echo $row['Name'];?>"/><br />
            <label for="inputText">Enter Department:</label>
            <input type="text" id="inputText" name="inputDepartment" value="<?php echo $row['Department'];?>"/><br />
            <label for="inputText">Enter Contact:</label>
            <input type="text" id="inputText" name="inputContact" value="<?php echo $row['Contact'];?>"/><br />
            <button type="submit">Update</button>
        </form>
    </body>
</html>