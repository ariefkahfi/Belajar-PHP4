<?php
include "koneksi.php";


$query = $con->query("select * from user");

$arr =array();

while ($rs = $query->fetch_assoc()){
    array_push($arr,$rs);
    echo $rs['username']."<br/>";
}

foreach ($arr as $idx => $x){
   echo $x['id'] . " " .  $x['username'] ."<br/>";
}


//foreach ($query->fetch_assoc() as $idx => $value){
//   echo $value;
//}