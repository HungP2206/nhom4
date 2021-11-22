<?php
    $connect = new mysqli('sql304.epizy.com','epiz_30365697','gIXaQESi6eCYNV','epiz_30365697_quanlybansach');
    if($connect->errno !== 0)
    {
        die("Error: Could not connect to the database. An error ".$connect->error." ocurred.");
    }

    $connect->set_charset('utf8');
?>