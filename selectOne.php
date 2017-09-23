<?php
include "koneksi.php";


$query_get_one = $con->prepare("select * from user where id = ? ");

$id = 2;

$query_get_one->bind_param("i",$id);
$query_get_one->execute();

$result = $query_get_one->get_result()->fetch_assoc();

echo $result['username'];




