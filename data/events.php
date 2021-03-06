<?php
    // Include config file
    require_once "../process/config.php";

    $id = 0;
    $denumire_eveniment = '';
    $locatie_eveniment = '';
    $data_eveniment = '';
    $numar_invitati = '';
    $evenimente = array();

    $buton_edit = '<a href="javascript:;" class="btn btn-xs yellow edit"><i class="fa fa-edit"></i> '._("Modifica").'</a>';
    $buton_delete = '<a href="javascript:;" class="btn btn-xs red delete"><i class="fa fa-trash-o"></i> '._("Sterge").'</a>';
    
    // Prepare a select statement
    $sql = "SELECT id, denumire_eveniment, locatie_eveniment, data, numar_invitati FROM events";


    if($stmt = mysqli_prepare($link, $sql)){
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Store result
            mysqli_stmt_store_result($stmt);

            // Check if username exists, if yes then verify password


                // Bind result variables
                mysqli_stmt_bind_result($stmt, $id, $denumire_eveniment, $locatie_eveniment, $data_eveniment, $numar_invitati);

                while(mysqli_stmt_fetch($stmt)){

                    $obj = array();
                    $obj[] = $id;
                    $obj[] = $denumire_eveniment;
                    $obj[] = $locatie_eveniment;
                    $obj[] = $data_eveniment;
                    $obj[] = $numar_invitati;
                    $obj[] = $buton_edit;
                    $obj[] = $buton_delete;
                    $evenimente[]= $obj;
                }

        }
    }


    $json_data=array("data" =>$evenimente);


    echo json_encode( $json_data );

?>