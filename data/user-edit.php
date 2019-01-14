<?php
// Include config file
require_once "../process/config.php";


$id      =  $_POST['id'];
$username=  $_POST['username'];
$rol =  $_POST['rol'];
// Prepare an insert statement
$sql = "UPDATE users SET username = ?, id_rol = ? WHERE id = ?";
if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sii", $username, $rol, $id);
    
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        // Redirect to login page
        echo '1';
    } else{
        echo '2';
    }
}
?>