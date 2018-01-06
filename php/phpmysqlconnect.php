<?php

	$host = 'localhost';
    $dbname = 'alex_akofena';
    $username = 'root';
    $password = '';

    $db_connection = mysqli_connect($host, $username, $password, $dbname) or die();

    //Check if connection established
    if(mysqli_connect_error())
    {
    	echo "Connection failed" .mysqli_connect_error();
    }

    echo "Success";
?>







