<?php
// Include config file
require_once "../process/config.php";

var_dump($_POST);
$denumire=  $_POST['denumire'];
$locatie =  $_POST['locatie'];
$data    =  $_POST['data'];
$invitati=  $_POST['invitati'];
// Prepare an insert statement
$sql = "INSERT INTO events (denumire_eveniment, locatie_eveniment, data, numar_invitati) VALUES (?, ?, ?, ?)";
if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sssi", $denumire, $locatie, $data, $invitati);



    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        // Redirect to login page
        echo '1';
    } else{
        echo '2';
    }
}
?>