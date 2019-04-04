<?php
$link = mysqli_connect("localhost","root","12345","university");
if($link === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}
$sql = "UPDATE hw5 SET university = 'Harvard' WHERE first_name = 'Oralle'";
if (mysqli_query ($link, $sql)){
    echo "Record Update successfully.";
}
else {
    echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
}
mysqli_close($link);
?>