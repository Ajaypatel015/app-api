<?php

    $host= "localhost";
    $database_name= "app_api";
    $database_username= "root";
    $database_pass= "";

    $conn=mysqli_connect($host,$database_username,$database_pass,$database_name);

    if($conn){

        echo "connection is success";

    }else{

        echo "connection error....";

    }

?>