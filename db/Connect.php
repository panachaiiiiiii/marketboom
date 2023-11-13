<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "market";
    $port = 3306;

    mysqli_report(MYSQLI_REPORT_OFF);

    $connecting = mysqli_connect($hostname,$username,$password,$database,$port);
    if(!$connecting){
        die("can't connected". mysqli_connect_error());
    }

?>