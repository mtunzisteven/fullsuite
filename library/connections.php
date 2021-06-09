<?php

/*
Proxy connection to the mediafs0_mediafrikaco database
*/

function connection(){
    $server ='162.241.253.54';
    $dbname = 'mediafs0_mediafrikaco';
    $username = 'mediafs0_mtunzism';
    $password = 'Imani2020!';
    $dsn = "mysql:host=$server; dbname=$dbname; port:3306;";
    $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    //create the actual connection object and assign it to a variable
    try{
        $link = new PDO($dsn, $username, $password, $option);
        return $link;
    }catch(PDOException $e){
        //echo $e;
        header('Location:/views/500.php');
        exit;
    }

}

