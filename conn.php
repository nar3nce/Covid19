<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', ''); 
define('DB_DATABASE', 'covid19'); 


$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

if ($conn->connect_errno) {
    die("Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error);
}

function fetch_all($sql){
    global $conn;
    $data = array();
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    return $data;
}

function fetch($sql){
    global $conn;
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}

function run_query($sql){
    global $conn;
    $conn->query($sql);
    return $conn->insert_id;
}

function escape_string($string){
    global $conn;
    return $conn->real_escape_string($string);
}

?>