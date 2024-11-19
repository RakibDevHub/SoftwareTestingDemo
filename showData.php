<?php
include "dbConnect.php";
$sql = "SELECT ID, Name, Department, Contact FROM information";
$result = $conn ->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: ".$row["ID"].
        "   Name: ".$row["Name"].
        "   Department: ".$row["Department"].
        "   Contact: ".$row["Contact"].
        "<form method='POST' action='delete.php' style='display:inline;'>
            <input type='hidden' name='id' value='".$row["ID"]."'>
            <button type='submit'>Delete</button>
        </form>
        <form method='GET' action='edit.php' style='display:inline;'>
            <input type='hidden' name='id' value='".$row["ID"]."'>
            <button type='submit'>Edit</button>
        </form><br><br>";
    }
} else {
    echo "No data found!";
}
$conn->close();

?>