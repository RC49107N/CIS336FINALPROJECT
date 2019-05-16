<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "final-geeksquad");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_GET['first_name']);
$last_name = mysqli_real_escape_string($link, $_GET['last_name']);
$email_address = mysqli_real_escape_string($link, $_GET['email_address']);
$time = mysqli_real_escape_string($link, $_GET['time']);
$reason = mysqli_real_escape_string($link, $_GET['reason']);
 
// attempt insert query execution
$sql = "INSERT INTO signin (first_name, last_name, email_address, time, reason) VALUES ('$first_name', '$last_name', '$email_address', '$time' ,'$reason')";
//$sql = "INSERT INTO signin (first_name, last_name, email_address, time, reason) VALUES ('ave', 'ace', 'aceave@gmail.com', '2019-15-05' ,'virus')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>