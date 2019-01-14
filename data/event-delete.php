<?php
// Include config file
require_once "../process/config.php";

$id=  $_POST['id'];
// Prepare an insert statement
$sql = "DELETE FROM events WHERE id = ?";
if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "i", $id);
    
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        // Redirect to login page
        echo '1';
    } else{
        echo '2';
    }
}
?>