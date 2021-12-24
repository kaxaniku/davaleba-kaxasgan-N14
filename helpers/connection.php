<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'blog';
$connection = mysqli_connect($servername, $username, $password, $dbname);

function gA($sql){
    global $connection;
    $result = mysqli_query($connection, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}


function gF($sql){
    global $connection;
    $result = mysqli_query($connection, $sql);
    return mysqli_fetch_assoc($result);
}
