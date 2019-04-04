<?php
$link = mysqli_connect("localhost","root","12345","university");
if($link === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}
$sql = "INSERT INTO hw5 (first_name, last_name, city, university) 
VALUES ('Lilin', 'Ou', 'New York', 'Pace')";
if (mysqli_query ($link, $sql)){
    echo "Records added successfully.";
}
else {
    echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
}
mysqli_close($link);
?>