<?php
/**
 * Created by PhpStorm.
 * User: Nehal
 * Date: 9/19/2016
 * Time: 7:53 PM
 */
include_once 'db_connect.php';

$conn=false;

function executeQuery($query){

    global $conn,$db_host,$db_name,$db_username,$db_pass;
    global $message;

    if(!($conn = @mysqli_connect($db_host,$db_username,$db_pass)))
        $message = "Cannot connect to server";
    if(!@mysql_selectdb($db_name,$conn))
        $message = "Cannot select database";

    $result = mysql_query($query,$conn);
    if(!$result)
        $message = "Error while executing query. <br/>Mysql Error: ".mysql_error();
    else
        return $result;
}

function closedb(){

    global $conn;
    if(!$conn)
        mysql_close($conn);
}