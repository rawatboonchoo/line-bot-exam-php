<?php

                    $db_host = "ql12.freemysqlhosting.net";
                    $db_user = "sql12276509";
                    $db_pass = "rQ4mGrDN3u";
                    $db_name = "sql12276509";


    $dbc = mysqli_connect($db_host,$db_user,$db_pass);
    if(!$dbc) {
        die('Not connected :' . mysqli_connect_errno());
    }
    
    //select database
    $db_select = mysqli_select_db($dbc, "sql12276509");
    if(!$db_select) {
        die('Cannot find any database :' . mysqli_error($dbc));
    }
    
    //test
    $query = "UPDATE status SET status_online = 'off'";
    $result = mysql_query($query);
    
    mysqli_close($dbc);
?>
