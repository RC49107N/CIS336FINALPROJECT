<?php
/* Attempt MySQL server connection.*/
$link = mysqli_connect("localhost", "root", "", "final-geeksquad");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM signin";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Email Address</th>";
        echo "<th>Time</th>";
        echo "<th>Reason</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['email_address'] . "</td>";
             echo "<td>" . $row['time'] . "</td>";
             echo "<td>" . $row['reason'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<a href=\"index.html\">Add Sign in</a>";
        echo "<a href=\"index.html\">Add Sign in</a>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
