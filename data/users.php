<?php
    // Include config file
    require_once "../process/config.php";

    $id = 0;
    $username = '';
    $rol = 0;
    $users = array();

    $buton_edit = '<a href="javascript:;" class="btn btn-xs yellow edit"><i class="fa fa-edit"></i> '._("Modifica").'</a>';
    
    // Prepare a select statement
    $sql = "SELECT id, username, id_rol FROM users";


    if($stmt = mysqli_prepare($link, $sql)){
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Store result
            mysqli_stmt_store_result($stmt);

            // Check if username exists, if yes then verify password


                // Bind result variables
                mysqli_stmt_bind_result($stmt, $id, $username, $rol);

                while(mysqli_stmt_fetch($stmt)){

                    $obj = array();
                    $obj[] = $id;
                    $obj[] = $username;
                    if($rol==1)
                        $obj[] = 'Administrator';
                    else
                        $obj[] = 'Vizitator';
                    $obj[] = $buton_edit;
                    
                    $users[]= $obj;
                }

        }
    }


    $json_data=array("data" =>$users);


    echo json_encode( $json_data );

?>