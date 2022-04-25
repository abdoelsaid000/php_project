<?php

    $dsn = 'mysql:dbname=ecommarce;host=127.0.0.1;port=3312;charset=utf8mb4';
    $user = 'root';
    $pass = 'mariadb';
    $options=array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',

    );
    try
    {
        $con=new PDO($dsn,$user,$pass);
        echo('connected');

    }
    catch(PDOException $e)
    {
        echo $e;

    }

    
    
?>