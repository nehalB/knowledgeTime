<?php
/**
 * Created by PhpStorm.
 * User: Nehal
 * Date: 9/19/2016
 * Time: 7:53 PM
 */
include_once 'db_connect.php';

$conn=false;

function executeQuery($query)
{

    global $conn, $db_host, $db_name, $db_username, $db_pass;
    global $message;

    $conn = mysqli_connect($db_host,$db_username,$db_pass, $db_name);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if ($result = mysqli_query($conn, $query)) {
        $message = "query fired successfully!";
    } else {
       $message = "Error while executing query.<br/>Mysql Error: ".mysqli_error($conn);
    }
    return $result;
}

function closedb(){

    global $conn;
    if(!$conn)
        mysqli_close($conn);
}