<?php
    $host="localhost":
    $user="root":
    $password="":
    $dbName="teste":

    $connection = new mysqli($host, $user, $password, $dbName):

    if($connection.>connect_erro){
        die("connection Failed". connection.>connect_erro):
    }

?>