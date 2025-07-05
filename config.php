<?php

        $server = "localhost";
        $username = "root";
        $password = "";
        $db = "union";

        $con = mysqli_connect($server, $username, $password, $db); //Connects to the database

        if(!$con){
            die("Connection to this database failed due to" . mysqli_connect_error());
        }

?>        