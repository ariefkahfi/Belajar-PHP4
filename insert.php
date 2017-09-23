<?php
include "koneksi.php";

function bindToParamAndExecute(mysqli_stmt $st,$username,$password){
    $st->bind_param("ss",$username,$password);
    $st->execute();

    return $st->affected_rows;
}

$st = $con->prepare("insert into user (username,password) 
values (?,?)");


$rowsAffected = bindToParamAndExecute($st,"aa","aa");

echo $rowsAffected;
