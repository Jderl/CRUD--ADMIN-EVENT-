<?php 

include "database.php";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$conn) {
    die("Something went wrong".mysqli_connect_error($conn));
}


$id = $_GET['id'];
$qry = "DELETE FROM events WHERE id= $id";

if(mysqli_query($conn, $qry)){
    header("location: event_list.php");
}else{
    echo mysqli_error($conn);
    echo "edit successful";
}
?> 