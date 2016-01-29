<?php
include("../connect.php");

$sql = "INSERT INTO users (firstname, lastname, email)
VALUES ('James', 'Roncesvalles', 'JamesRoncy13@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
