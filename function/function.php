<?php

use LDAP\Result;

$con = mysqli_connect("localhost","root","","ina_inventory");

function view($query){
    global $con;
    
    $result= mysqli_query($con, $query);
    return $result;
}

function tambah($data, $noFile){
    global $con;
    
    if($noFile == 1){
        $username = strtolower(stripslashes($data['username']));
        $password = mysqli_real_escape_string($con, $data['password']);        
        
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO tb_user (username, password) VALUES ('$username','$password')";
        
        mysqli_query($con, $query);
        return mysqli_affected_rows($con);
        
    }
}

?>