<?php

$conn = new mysqli('localhost', 'root', '', 'vatbangla');

if($conn->connect_error){
    die('Connection Failed '.$conn->connect_error);
}


?>